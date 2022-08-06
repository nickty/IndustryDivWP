<?php 
/**
 * Theme Functions
 * 
 * @package div
 */


 function div_enqueue_scripts() {

    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('slider', get_template_directory_uri() . '/assets/slider.css', [], filemtime( get_template_directory() . '/assets/slider.css'), 'all');

    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap', false ); 



    wp_enqueue_script('jqeury', get_template_directory_uri() . '/assets/jqeury.js', [], filemtime( get_template_directory() . '/assets/jqeury.js'), true);
     
    wp_enqueue_script('slider', get_template_directory_uri() . '/assets/slider.js', [], filemtime( get_template_directory() . '/assets/slider.js'), true);
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