<?php
/**
 * @package DM_Style_Guide
 * @version 1.0.1
 */
/*
Plugin Name: DM Style Guide
Plugin URI: https://github.com/DesignMissoula/dm-style-guide
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an single developer.
Author: Bradford Knowlton
Version: 1.0.1
Author URI: http://bradknowlton.com/
*/


function add_theme_codes() {

 wp_enqueue_style( 'expedia-style', plugin_dir_url( __FILE__ ) . 'css/global.v1.css', 'all');
}

add_action( 'wp_enqueue_scripts', 'add_theme_codes', 9999 );

