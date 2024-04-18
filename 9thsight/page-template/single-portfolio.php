<?php 
/**
*Template Name: Portfolio Gallery Template
 */
  get_header(); 
  if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $page_content = get_the_content();
    $page_title  =  get_the_title();
    $page_background = get_the_post_thumbnail_url();
    
  endwhile; 
  endif; 
?>

<div class="wrap" data-router-wrapper="">
    <main data-router-view="renderer" class="page-content container" data-transition-in="default">
        <article id="post-1371" class="post-1371 page type-page status-publish hentry">
            <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
            <div class="wp-block-columns">
                <div class="wp-block-column" style="flex-basis:50%" >
                    <h1><?php echo get_field('top_section_title'); ?></h1>
                    <h3 class="color--primary"><?php echo get_field('top_section_sub_title'); ?></h3>
                </div>
                <div class="wp-block-column" style="flex-basis:50%" ></div>
            </div>
            <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
            <div class="portfolio">
                <div class="filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter="a-plus-content-gallery">A++</li>
                        <li data-filter="brand-story-gallery">Brand Story</li>
                        <li data-filter="listing-images-gallery">Listing Images</li>
                        <!-- <li data-filter="video-gallery">Video</li> -->
                        <li data-filter="storefront-gallery">Storefront</li>
                        <!-- <li data-filter="photography-gallery">Photography</li> -->
                        <!-- <?php $categories = get_terms('category', 'orderby=count&hide_empty=0&order=asc'); ?>
                        <?php
                            foreach ($categories as $cat) {
                                $term_link = get_term_link($cat);
                                ?>
                        <li data-filter="<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></li>
                        <?php } ?> -->
                        
                    </ul>
                </div>
                <div class="row">
                    <?php
                       $args = array('post_type' => 'portfolio_gallery', 'post_status' => 'publish', 'posts_per_page' => '-1');
                       $loop = new WP_Query($args);
                       if ($loop->have_posts()) :
                       while ($loop->have_posts()) : $loop->the_post();
                       
                       $cats = get_the_category($id);
                    ?>
                    <div class="col-xs-12 col-md-6 col-lg-4 col-portfolio <?php echo $cats[0]->slug; ?>" data-anim="stagger">
                        <?php $repeater_rows = get_field('gallery_images');?>
                        <?php $num_rows = count($repeater_rows); ?>
                        <?php if( have_rows('gallery_images') ) { ?>
                            <?php if ($num_rows > 1) {?>
                                <div class="owl-carousel owl-theme">
                                    <?php while( have_rows('gallery_images') ) { the_row(); ?>
                                        <?php $image = get_sub_field('gallery_image'); ?>
                                        <div class="item">
                                            <img class="img-fluid"  data-fancybox="<?php  echo strtolower(str_replace(' ', '', get_the_title('', false))); ?>" src="<?php echo $image['url']; ?>"  />
                                        </div>
                                    <?php } ?>
                                </div>    
                            <?php } else{ ?>
                            <?php while( have_rows('gallery_images') ) { the_row(); ?>
                                <?php $image = get_sub_field('gallery_image'); ?>
                                    <img class="img-fluid"  data-fancybox="<?php  echo strtolower(str_replace(' ', '', get_the_title('', false))); ?>" src="<?php echo $image['url']; ?>"  />
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_query();
                        wp_reset_postdata();
                        endif; 
                    ?>
            </div>
        </div>
        </article>
    </main>
</div>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>