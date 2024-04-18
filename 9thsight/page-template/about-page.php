<?php 
/**
*Template Name: About Template
 */
  get_header(); 

?>


<div class="wrap" data-router-wrapper="">
	<main data-router-view="renderer" class="page-content container" data-transition-in="default">
		<article id="post-1204" class="post-1204 page type-page status-publish hentry">
			<section class="hero-image hero-image__theme--dark" 

				<?php if( get_field('top_banner_image') ): ?>
            style=" background: url(<?php echo the_field('top_banner_image'); ?>);"
        <?php endif; ?>    
				
			>
				<div class="hero-image__wrap">
					<div class="hero-image__contain">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-md-6 col-md-offset-6">
									<h1><?php echo get_field('top_banner_title')?></h1>
									<h2 class="h3"><?php echo get_field('top_banner_sub_title')?><br>
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
			<div class="wp-block-columns">
				<div class="wp-block-column" style="flex-basis:15%"></div>
				<div class="wp-block-column">
					<h2 class="mono color--primary"><?php echo get_field('company_info_title')?></h2>
					<?php echo get_field('company_info_text')?>
				</div>
				<div class="wp-block-column" style="flex-basis:15%"></div>
			</div>
			<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
			<section class="services__slice">
			  <div class="container">
			    <div class="services__slice__title">
			      <div class="services__slice__row">
			        <div class="col-xs-12 col-md-6 col-lg-4" data-anim="stagger">
			          <h2><?php echo esc_html( get_field('services_section_title', 'option') ); ?></h2>
			          <h3><?php echo esc_html( get_field('services_section_sub_title', 'option') ); ?></h3>
			        </div>
			      </div>
			    </div>
			    <div class="services__slice__row" data-anim="cards">
			      <?php if( have_rows('service_card', 'option') ): ?>
			        <?php while( have_rows('service_card', 'option') ) : the_row(); ?>
			          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
			            <div class="category__card">
			              <div>
			                <div class="category__card__wrap">
			                  <div class="category__card__carousel">
			                    <div class="category__card__carousel--img" style="background-image:url(<?php the_sub_field('service_card_image', 'option');  ?>)"></div>
			                    <img src="<?php the_sub_field('service_card_image', 'option');  ?>" alt="Design." class="lazy">
			                  </div>
			                  <div class="category__card__content">
			                    <h3 class="category__card__title h4">
			                      <span><?php the_sub_field('service_card_title');  ?></span>
			                    </h3>
			                    <?php
			                    if( have_rows('service_card_links') ): ?>
			                      <ul class="category__card__products">
			                        <?php
			                          while( have_rows('service_card_links') ): the_row();
			                        ?>
			                          <li class="category__card__product">
			                            <a href="<?php the_sub_field('service_card_link_url');  ?>">
			                              <h4><?php the_sub_field('service_card_link_name');  ?></h4>
			                              <div class="category__card__product--arrow">
			                                <svg width="40px" height="12px" viewBox="0 0 50 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			                                    <g transform="translate(0.000000, -5.000000)" fill="currentColor" fill-rule="nonzero">
			                                      <g transform="translate(0.000000, 5.000000)">
			                                        <polygon points="0.3 6.18 47.1 6.18 47.1 8.58 0.3 8.58"></polygon>
			                                        <polygon points="41.0533689 15.6 39.3 13.9695042 45.9356357 7.8 39.3 1.63049585 41.0533689 0 49.44 7.80002794"></polygon>
			                                      </g>
			                                    </g>
			                                  </g>
			                                </svg>
			                              </div>
			                            </a>
			                          </li>
			                        <?php endwhile; ?>
			                      </ul>
			                    <?php endif; ?>
			                  </div>
			                </div>
			              </div>
			            </div>
			          </div>
			        <?php endwhile; ?>
			      <?php endif; ?>
			    </div>
			  </div>
			</section>
			<section class="clients__slice">
			  <div class="container">
			    <div class="clients__slice__title">
			      <div class="clients__slice__row">
			        <div class="col-xs-12 col-md-6 col-lg-6 col-md-offset-6" data-anim="stagger">
			          <h2><?php echo get_field('brand_title', 'option')?></h2>
			          <h3><?php echo get_field('brand_sub_title', 'option')?></h3>
			        </div>
			      </div>
			    </div>
			    <div class="clients__slice__row">
			      <?php if( have_rows('brand_images', 'option') ): ?>
			        <?php while( have_rows('brand_images', 'option') ) : the_row(); ?>
			          <div class="clients__slice__logo">
			            <?php 
			              $image = get_sub_field('brand_image', 'option');
			              if( !empty( $image ) ): 
			            ?>
			                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			            <?php endif; ?>
			          </div>
			        <?php endwhile; ?>
			      <?php endif; ?>
			    </div>
			  </div>
			</section>
			<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
			<section class="team__cards">
				<div>
					<div class="team__cards__title" data-anim="stagger">
						<div class="row">
							<div class="col-xs-12 col-md-6 col-md-offset-6">
								<h2><?php echo get_field('our_team_title')?></h2>
								<h3 class="color--primary"><?php echo get_field('our_team_sub_title')?></h3>
							</div>
						</div>
					</div>
					<div class="team__cards__container">
						<div class="row">
							<?php if( have_rows('our_team_list') ): ?>
								<?php while( have_rows('our_team_list') ) : the_row(); ?>
									<div class="team__cards__col col-xs-12 col-sm-6" data-align="right" data-test="">
										<div class="team__card team__card__theme--light" data-anim="card">
											<div class="team__card__wrap">
												<div class="team__card__content">
													<h5 class="team__card__title">
														<span><?php echo the_sub_field('team_member_name')?></span>
													</h5>
													<h6 class="team__card__body">
														<span><?php echo the_sub_field('team_member_designation')?></span>
													</h6>
												</div>
											</div>
											<div class="team__card__gradient"></div>
											<div class="team__card__thumbnail">
												<figure>
													<?php 
														$image = get_sub_field('member_image');
														if( !empty( $image ) ): ?>
														    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</figure>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
			<div style="height:96px" aria-hidden="true" class="wp-block-spacer"></div>
			<section class="wp-block-columns">
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
					<p class="mono color--primary"><?php echo get_field('about_vision_title_slogan')?></p>
					<h2 class="h4"><?php echo get_field('about_vision_title')?></h2>
				</div>
				<div class="wp-block-column" style="flex-basis:7%" ></div>
				<div class="wp-block-column" has-animated="">
					<figure class="wp-block-image alignwide size-large">
						<?php 
							$image = get_field('about_vision_image');
							if( !empty( $image ) ): ?>
							    <img loading="lazy" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
					</figure>
				</div>
			</section>
			<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
			<section class="values">
				<div class="values__container container">
					<div class="values__title" data-anim="stagger">
						<h2><?php echo get_field('our_value_section_title')?></h2>
						<h3 class="color--primary"><?php echo get_field('our_value_section_sub_title')?></h3>
					</div>
					<div class="values__list">
						<div class="row">
							<?php if( have_rows('our_value_list') ): ?>
								<?php while( have_rows('our_value_list') ) : the_row(); ?>
									<div class="values__column col-xs-12 col-sm-6" data-anim="stagger">
										<h4><?php echo the_sub_field('our_value_list_title')?></h4>
										<h5 class="h3 color--primary"><?php echo the_sub_field('our_value_list_sub_title')?></h5>
										<p><?php echo the_sub_field('our_value_list_text')?></p>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		</article>
	</main>
</div>


<?php get_footer(); ?>