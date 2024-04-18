<?php 
/**
*Template Name: Common Template
 */
  get_header(); 

?>

<div class="wrap" data-router-wrapper="">
<main data-router-view="renderer" class="page-content container" data-transition-in="default">
<article id="post-3" class="post-3 page type-page status-publish hentry">
<h1><?php echo get_the_title() ?></h1>
<h3 class="color--primary">Last updated <?php echo get_post_modified_time('F Y'); ?></h3>
<?php the_content(); ?>
</article>
</main>
</div>


<?php get_footer(); ?>
