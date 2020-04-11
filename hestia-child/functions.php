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
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);


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
            
        }
    }

    add_action("template_redirect", 'hoantien_template_redirect');

}






