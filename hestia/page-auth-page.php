<?php
wp_head();
if (is_user_logged_in()) {
    echo '<pre>';
    print_r($_SERVER['HTTP_REFERER']);
    echo '</pre>';
    die;
    if (isset($_GET['site'])) {

    }
} else {

    echo do_shortcode('[xoo_el_action type="login" change_to="logout"]');

}
wp_footer();



