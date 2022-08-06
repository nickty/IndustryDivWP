<?php
/**
 * Main template file
 * 
 * @package div
 */

 get_header(); 
 ?>

 <div class="content">
 <!-- <h2>Slider demo</h2>
<div class="slider fade">
  <div>
    <div class="image">
      <img src="http://kenwheeler.github.io/slick/img/fonz1.png"/>
    </div>
  </div>
  <div>
    <div class="image">
      <img src="http://kenwheeler.github.io/slick/img/fonz2.png"/>
    </div>
  </div>  <div>
    <div class="image">
      <img src="http://kenwheeler.github.io/slick/img/fonz3.png"/>
    </div>
  </div>
</div> -->
<div class="posts">

<h2 class="category">Latest Articles</h2>
<div class="latest_post">
  <!-- <h2>Latest Articles</h2> -->
  <?php 
   // the query
   $the_query = new WP_Query( array(
    //  'category_name' => 'news',
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <div class="rccc">
  <h1 class="rc"><?php the_title(); ?></h1>
  <p class="rcc"><?php the_excerpt(); ?></p>
  </div>
  
    

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>
</div>

</div>



<div class="most_viewed">
<hr />
  <h2 class="category">Most Viewed</h2>
  <div class="most_viewed_post">
  <?php 
   // the query
   $the_query = new WP_Query( array(
    //  'category_name' => 'news',
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>
  </div>
</div>

<div class="most_viewed">
<hr />
  <h2 class="category">Industry</h2>
  <div class="most_viewed_post">
  <?php 
   // the query
   $the_query = new WP_Query( array(
     'category_name' => 'Industriy',
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>
  </div>
</div>

<div class="most_viewed">
<hr />
  <h2 class="category">Innovation</h2>
  <div class="most_viewed_post">
  <?php 
   // the query
   $the_query = new WP_Query( array(
     'category_name' => 'Innovation',
      'posts_per_page' => 3,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <p><?php the_excerpt(); ?></p>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>
  </div>
</div>
</div>
 </div>

<?php
 get_footer();