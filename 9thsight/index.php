<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap" data-router-wrapper="">
	<main data-router-view="renderer" class="page-content container">
		<section class="news__articles__page">
			<div class="news__articles__page__container">
				<h1><?php wp_title($sep = ''); ?></h1>
				<div class="articles__filter">
					<h3 class="h6 color--primary">
						Categories:
					</h3>
					<div class="articles__filter__categories">
						<div class="articles__filter__category">
							<span class="articles__filter__category__name">All</span>
							<span class="divider">|</span>
						</div>
						<?php
							$categories = get_categories($post->ID);
							foreach ( $categories as $category ) {
						?>
						<div class="articles__filter__category">
							<span class="articles__filter__category__name">
								<?php echo $category->name; ?>
							</span>
							<span class="divider">|</span>
						</div>
						<?php
							}
						?>
					</div>
				</div>

				<div class="row blog-wrapper">
					<?php 
						$args = array(
							'post_type'      => 'post',
							'post_status'    => 'publish',
							'order' => 'DESC',
							'posts_per_page' => -1,
						);

						$loop = new WP_Query( $args );
						if ($loop->have_posts()) :
							while ($loop->have_posts()) : $loop->the_post();
					?>

					<div class="news__card__parent col-xs-12 col-sm-6 col-md-4" 

						data-filter="
							<?php
								$categories = get_the_category();
								if ( ! empty( $categories ) ) {
									echo esc_html( $categories[0]->name );	
								}
							?>
						"
					>
						<div class="news__card news__card__<?php echo get_field('card_theme'); ?>">
							<a href="<?php echo get_permalink(); ?>">
								<div class="news__card__wrap">
									<div class="news__card__tag">
										<h6>
											<span>
												<?php
													$categories = get_the_category();
													if ( ! empty( $categories ) ) {
														echo esc_html( $categories[0]->name );	
													}
												?>
											</span>
										</h6>
									</div>
									<div class="news__card__content">
										<div class="news__card__content__title">
											<h5>
												<span><?php the_title(); ?></span>
											</h5>
										</div>
										<div class="news__card__content__cite">
											<h6 class="news__card__cite__read">
												<span>Read more</span>
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
											<h6 class="news__card__cite__date">
												<span><?php the_date( 'j F, Y' ); ?></span>
											</h6>
										</div>
									</div>
								</div>
								<div class="news__card__thumbnail">
									<?php  // echo get_the_post_thumbnail( $postData->ID ); ?>
									<?php $case_img = wp_get_attachment_image_src(get_post_thumbnail_id($loop->ID), 'full'); 
									if($case_img){ 
										?>
										<img src="<?php echo $case_img[0]; ?>" class="lazy" alt="<?php the_title(); ?>">
									<?php } ?>
								</div>
							</a>
						</div>
					</div>
					<?php
						endwhile;
						wp_reset_query();
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
		</section>
	</main>
</div>
<?php
get_footer();
