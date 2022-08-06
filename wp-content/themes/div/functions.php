<?php 
/**
 * Theme Functions
 * 
 * @package div
 */


 function div_enqueue_scripts() {

    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all'); 

 }

 add_action('wp_enqueue_scripts', 'div_enqueue_scripts')

 ?>