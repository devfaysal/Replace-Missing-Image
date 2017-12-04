<?php
/**
 * Plugin Name: Replace Missing Image
 * Plugin URI: http://faysal.me
 * Description: This Plugin will replace missing image with a given image
 * Author: Faysal Ahamed
 * Author URI: http://faysal.me
 * Version: 0.0.1
 */


//Enqueue Javascript
 function rmi_load_plugin_js() {
     $plugin_url = plugin_dir_url( __FILE__ );
     if ( ! wp_script_is( 'jquery', 'enqueued' )) {
        wp_enqueue_script( 'jquery' );
    }
     wp_enqueue_script( 'rmi_custom_script', $plugin_url . 'replace-image.js', array(), '1.0.0', true );
 }
 add_action( 'wp_enqueue_scripts', 'rmi_load_plugin_js' );
