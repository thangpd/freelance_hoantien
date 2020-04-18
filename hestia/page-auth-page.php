<?php
wp_head();
if (is_user_logged_in()) {
    $url_temp = $_SERVER['HTTP_REFERER'];
//    echo '<pre>';
//    print_r($url_temp);
//    echo '</pre>';
//    $url = 'https://tiki.vn/';
    $url = $_SERVER['HTTP_REFERER'];
    if (!empty($url)) {
//    echo '<pre>';
//    print_r($url);
//    echo '</pre>';

        $url = str_replace(['https://', 'http://'], '', $url);
        $url = explode('.', $url);
        unset($url[count($url) - 1]);
//    echo '<pre>';
//    print_r($url);
//    echo '</pre>';

        $arr_query = [
            'post_type' => 'product',
            'post_status' => 'publish',
            'posts_per_page' => -1,
//        'post_name' => $url[count($url) - 1],
            'post_name__in' => $url,
        ];
        $query = new WP_Query($arr_query);
        if ($query->found_posts > 0) {
            foreach ($query->posts as $value) {
//                    echo '<pre>';
//                    print_r($value);
//                    echo '</pre>';
                $linkaff = get_field('linkaff', $value->ID);
                if (!empty($linkaff)) {
                    wp_redirect($linkaff);
                } else {
                    echo 'no afflink';
                }
            }
        } else {
            echo 'no found post';
        }
    } else {
        echo 'empty url';
    }
//    wp_redirect(home_url());
//    echo '<pre>';
//    print_r($_SERVER);
//    echo '</pre>';
//    die;
} else {
    echo '<div class="hidden">';
    echo do_shortcode('[xoo_el_action type="login" change_to="logout"]');
    echo '</div>';
}
$script = <<<JS
jQuery(document).ready(function( $ ){
    $('.xoo-el-action-sc').click();
});
JS;

wp_add_inline_Script('jquery-bootstrap', $script, 'after');
wp_footer();



