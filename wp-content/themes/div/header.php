<?php 
/**
 * Theme file
 * 
 * $package div
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo() ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
   
  <header class="divnav">
    <div>
        LOGO
    </div>
  <?php wp_nav_menu( array( 'theme_location' => 'nav menu', 'container_class' => 'custom-menu-class' ) ); ?>
  </header>
 