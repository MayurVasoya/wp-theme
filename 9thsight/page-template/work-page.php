<?php 
/**
*Template Name: Work Template
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
		<article id="post-1374" class="post-1374 page type-page status-publish hentry">
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
				<div class="wp-block-columns">
					<div class="wp-block-column" style="flex-basis:50%" >
					<h1><?php echo get_field('top_section_title'); ?></h1>
	          	<h3 class="color--primary"><?php echo get_field('top_section_sub_title'); ?></h3>
				</div>
				<div class="wp-block-column" style="flex-basis:50%" ></div>
			</div>
			<section class="latest-projects project__cards project__cards--hasFeatured">
				<div>
					<div class="row">
						<?php
               $args = array('post_type' => 'portfolio', 'post_status' => 'publish', 'posts_per_page' => '-1');
               $loop = new WP_Query($args);
               if ($loop->have_posts()) :
               while ($loop->have_posts()) : $loop->the_post();
               
               $cats = get_the_category($id);
           	?>
            <div class="project__cards__col col-xs-12 <?php echo ($loop->current_post == 0?'left':'col-sm-6'); ?>" data-align="<?php echo ($loop->current_post%2 == 0?'right':'left'); ?>">
							<div class="featured__project featured__project__theme--<?php echo get_field('card_theme'); ?>" data-anim="card">
								<a href="<?php the_permalink(); ?>" class="featured__project__link">
									<div class="featured__project__wrap">
										<div class="featured__project__content">
											<h5 class="featured__project__title">
												<span><?php the_title(); ?></span>
											</h5>
											<h6 class="featured__project__body">
												<span></span>
											</h6>
										</div>
										<div class="featured__project__cite">
											<h6 class="featured__project__cite__view">
												<span>View project</span>
												<svg width="50px" height="16px" viewBox="0 0 50 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<g transform="translate(0.000000, -5.000000)" fill="currentColor" fill-rule="nonzero">
															<g transform="translate(0.000000, 5.000000)">
																<polygon points="0.3 6.18 47.1 6.18 47.1 8.58 0.3 8.58"></polygon>
																<polygon points="41.0533689 15.6 39.3 13.9695042 45.9356357 7.8 39.3 1.63049585 41.0533689 0 49.44 7.80002794"></polygon>
															</g>
														</g>
													</g>
												</svg>
											</h6>
										</div>
									</div>
									<div class="featured__project__thumbnail">
										<figure>
											<!-- <img src="https://think3.co.uk/app/uploads/2023/07/Banner-2-scaled.jpg" data-src="https://think3.co.uk/app/uploads/2023/07/Banner-2-scaled.jpg" alt="Elton Ecology background" data-ll-status="loaded" class="loaded"> -->
											<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
										</figure>
									</div>
								</a>
							</div>
						</div>
           		<!-- <h2><?php //the_title(); ?></h2> -->
           	<?php
              endwhile;
              wp_reset_query();
              wp_reset_postdata();
              endif; 
            ?>
					</div>
				</div>
			</section>
		</article>
	</main>


<?php get_footer(); ?>
</div>