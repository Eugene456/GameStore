<?php
/**
 * Plugin Name: Gamestore General
 * Description: Core Code for the Gamestore site.
 * Version: 1.0.0
 * Author: Eugene Shevchenko
 * Author URI: https://eugene-shevchenko.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


function gamestore_remove_dashboard_widgets() {
    global $wp_meta_boxes;
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity'] ); // Activity
}

    add_action( 'wp_dashboard_setup', 'gamestore_remove_dashboard_widgets' );
