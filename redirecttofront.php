<?php
/*
Plugin Name: Redirect to Front
Plugin URI: https://github.com/rensieeee/wordpress-redirect-to-front
Description: When enabled, automatically redirects all paths back to the front page. Use for single page websites.
Author: Rens Wolters
Version: 1.0.0
Author URI: https://github.com/rensieeee
*/

add_action( 'template_redirect', 'redirect_to_homepage' );

function redirect_to_homepage() {
    $homepage_id = get_option('page_on_front');
    if (!is_page($homepage_id)) {
        wp_redirect(home_url('index.php?page_id=' . $homepage_id));
    }
}
