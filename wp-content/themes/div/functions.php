<?php 
/**
 * Theme Functions
 * 
 * @package div
 */


 function div_enqueue_scripts() {

    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js'), true);


 }

 add_action('wp_enqueue_scripts', 'div_enqueue_scripts');



 function add_nav_menus() {
    register_nav_menus( array(
        'nav menu'=>'Navigation Bar',
        'footer menu'=> 'Footer Bar',
    ));
}
add_action('init', 'add_nav_menus');

 ?>