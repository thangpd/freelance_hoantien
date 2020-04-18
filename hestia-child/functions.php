<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')):
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')):
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array('bootstrap', 'hestia-font-sizes'));
    }

    add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

endif;
if (!function_exists('child_theme_config_parent_script')) {
    function child_theme_config_parent_script()
    {
        $script = get_stylesheet_directory_uri() . '/script.js';
        wp_enqueue_script('chld_thm_cfg_script', $script, array('jquery'), 1.12, true);
        $js = <<<JS
      
jQuery(document).ready(function ($) {
            console.log('inline script child theme');
            $('a').on('click',function(e){
            let li_parent = $(this).parents('li.product');
            if(li_parent.length !== 0 ){
                e.preventDefault();
                let regExpMatchArrayElement = (li_parent[0].classList.value).match(/post-[\d].*?\s/)[0];
                //remove all leading non-digit with nothing
                 regExpMatchArrayElement = regExpMatchArrayElement.replace( /^[\D|\s]+/g, '');
                 //trim whitespace
                 regExpMatchArrayElement=regExpMatchArrayElement.trim();
                
                data={product_id:regExpMatchArrayElement,action:'hoantien_get_link_aff_from_product',};
                $.ajax({
                    method:'get',
                    url:ElementorProFrontendConfig.ajaxurl,
                    data:data,
                }).success(function(res){
                    console.log('ok');
                console.log(res);
                
                    if(res.success==200){
                        console.log(res.link_aff);
                        window.location.href=res.link_aff;
                    }else{
                        console.log('khong lay duoc link');
                    }
                });
            }
                            
            })

});
JS;
        if (is_front_page()) {
            wp_add_inline_script('chld_thm_cfg_script', $js, 'after');
        }

    }

    add_action('wp_enqueue_scripts', 'child_theme_config_parent_script');
}

// Replacing the button add to cart by a link to the product in Shop and archives pages
// For variable and simple products
add_filter('woocommerce_loop_add_to_cart_link', 'replace_loop_add_to_cart_button', 10, 2);
function replace_loop_add_to_cart_button($button, $product)
{
    // Set HERE your product categories in the array
    $terms = array('t-shirts', 'gloves');

    // Only for simple products
    if (!$product->is_type('variable')) return;

    if (has_term($terms, 'product_cat', $product->get_id())) {
        $button_text = __("View product", "woocommerce");
        $button = '<a class="button" href="' . $product->get_permalink() . '">' . $button_text . '</a>';
    }
    return $button;
}


add_filter('auto_update_theme', '__return_false');
add_filter('auto_update_plugin', '__return_false');

add_action('user_register', 'my_function');

function my_function($user_id)
{
    global $wpdb;
    $cautvan = "select * from settinghoahong";
    $kqtruyvan = $wpdb->get_row($cautvan);
    $wpdb->insert('sotientichluy', array(
        'iduser' => $user_id,
        'sotiendukien' => "0",
        'sotienthuclanh' => $kqtruyvan->tienusernew,
    ));
}


// END ENQUEUE PARENT ACTION
// 


if (!function_exists('add_logged_in_class')) {
    function add_logged_in_class($classes)
    {
        if (is_user_logged_in()) {
            $classes[] = 'logged-in';
        } else {
            $classes[] = 'not-logged-in';
        }


        return $classes;
    }

    add_filter('body_class', 'add_logged_in_class');
}


if (!function_exists('hoantien_template_redirect')) {

    function hoantien_template_redirect()
    {
        global $wp;
        if ($wp->request == 'get_list_link_aff') {
            $arr_query = [
                'post_type' => 'product',
                'post_status' => 'publish',
                'posts_per_page' => -1,

            ];
            $query = new WP_Query($arr_query);
            $return_json = [];
            if ($query->found_posts > 0) {
                foreach ($query->posts as $value) {
//                    echo '<pre>';
//                    print_r($value);
//                    echo '</pre>';
                    $linkaff = get_field('linkaff', $value->ID);
                    if (!empty($linkaff)) {
                        $return_json['linkaff'][] = ['post_name' => $value->post_name, 'link' => $linkaff];
                    }
                }
            }
            print_r(json_encode($return_json));

            die();
        }
    }

    add_action("template_redirect", 'hoantien_template_redirect');
}

if (!function_exists('hoantien_get_link_aff_from_product')) {
    function hoantien_get_link_aff_from_product()
    {
        $res = [];
        if (isset($_GET['product_id'])) {
            $linkaff = get_field('linkaff', $_GET['product_id']);
            $res['success'] = 200;
            $res['link_aff'] = $linkaff;
        }
        wp_send_json($res,200);

    }

    add_action('wp_ajax_hoantien_get_link_aff_from_product', 'hoantien_get_link_aff_from_product');
    add_action('wp_ajax_nopriv_hoantien_get_link_aff_from_product', 'hoantien_get_link_aff_from_product');
}






