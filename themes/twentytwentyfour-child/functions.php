<?php
/**
 * Twenty Twenty-Four-child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four-child
 * @since Twenty Twenty-Four-child 1.0
 */

 function child_enqueue_scripts(){
    wp_enqueue_style('child-style', get_stylesheet_directory_urli(). '/style.css' );
 }
 add_action( 'wp_enqueue_scrips', 'child_enqueue_scripts');