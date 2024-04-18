<?php 
/**
*
 */
  get_header(); 
  
?>
<?php
   $args = array('post_type' => 'portfolio', 'post_status' => 'publish', 'posts_per_page' => '6');
   $loop = new WP_Query($args);
   if ($loop->have_posts()) :
   while ($loop->have_posts()) : $loop->the_post();
   
   $cats = get_the_category($id);
?>
<?php
  endwhile;
  wp_reset_query();
  wp_reset_postdata();
  endif; 
?>

<?php get_footer(); ?>