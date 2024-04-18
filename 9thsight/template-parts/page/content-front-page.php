<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>


<section class="latest__articles">
	<div class="latest__articles__container">
		<div class="latest__articles__title" data-anim="stagger">
			<h2>
				<span><?php echo get_field('blog_section_title'); ?></span>
			</h2>
			<h3 class="color--primary">
				<span><?php echo get_field('blog_section_sub_title'); ?></span>
			</h3>
		</div>
		<div class="row">
			<?php 
			$args = array(
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'order' => 'DESC',
				'posts_per_page' => 3,
			);

			$loop = new WP_Query( $args );
			if ($loop->have_posts()) :
				while ($loop->have_posts()) : $loop->the_post();
					?>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="news__card news__card news__card__<?php echo get_field('blog_card_theme'); ?>">
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
			<div class="latest__articles__readMore">
				<?php
				$blog_section_button = get_field('blog_section_button');
				if( $blog_section_button ): 
					?>
					<a class="button button__primary" href="<?php echo $blog_section_button['blog_section_button_url']; ?>"><?php echo $blog_section_button['blog_section_button_label']; ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>