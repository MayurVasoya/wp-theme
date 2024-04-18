<?php 
/**
*Template Name: Dummy Template
 */
  get_header(); 
  if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    $page_content = get_the_content();
    $page_title  =  get_the_title();
    $page_background = get_the_post_thumbnail_url();
    
  endwhile; 
  endif; 
?>

<!-- Banner Start -->
	<section class="banner work-banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
			    <?php 
                        if( have_rows('banner_slider_digi') ):
                     $sli = 1;   while ( have_rows('banner_slider_digi') ) : the_row();
                     if($sli == 1){
                         $sliactive = 'active';
                     }else{
                         $sliactive = '';
                     }
                     ?>
				<div class="carousel-item <?php echo $sliactive; ?>" style="background-image: url('<?php the_sub_field('image_banner_slider_digi'); ?>');">
					<div class="banner-des">
						<div class="row">
							<div class="col-lg-10 offset-lg-1">
								<h5><?php the_sub_field('sub_title_slider_digi'); ?></h5>
								<h2><?php the_sub_field('title_slider_digi'); ?> <span><?php the_sub_field('title_yellow_text_slider_digi'); ?></span> <?php the_sub_field('title_yellow_text_after_slider_digi'); ?></h2>
								<?php the_sub_field('description_banner_slider_digi'); ?>
								<?php if(get_sub_field('button_link_slider_digi')): ?>
								    <a href="<?php the_sub_field('button_link_slider_digi'); ?>" class="btn btn-red"><?php the_sub_field('button_caption_slider_digi'); ?></a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<?php   $sli++;  
                          endwhile;
                          wp_reset_query();
                          wp_reset_postdata();
                        endif; ?>
				
			</div>
		</div>
	</section>
	<!-- Banner End -->

	<!-- Best Digital Start -->
	<?php if(get_field('sub_title_best_digital_about') || get_field('title_best_digital_about') || get_field('description_best_digital_about')): ?>
	<section class="best-digital common-ptb common-plr">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="common-head digital-head text-center common-pr">
						<h5><?php the_field('sub_title_best_digital_about'); ?></h5>
<h2><?php the_field('title_best_digital_about'); ?> <span><?php the_field('title_red_text_best_digital_about'); ?></span> <?php the_field('title_red_text_after_best_digital_about'); ?></h2>
					</div>
				</div>
				<div class="col-xl-6 order-2">
					<div class="web-bes-des">
						<div class="common-head">
							<?php the_field('description_best_digital_about'); ?>
							<div class="auther-name">
								<img src="<?php the_field('signature_best_digital_about'); ?>" alt="Icons" class="sign-img">
								<h3>	
									<?php the_field('author_name_best_digital_about'); ?>
									<label><?php the_field('author_position_best_digital_about'); ?></label>
								</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 order-1">
					<div class="seo-img">
						<img src="<?php the_field('author_image_best_digital_about'); ?>" alt="Images">
						<div class="website-des">
						    <?php 
                                    if( have_rows('services_list_best_digital_about') ):
                               $ser = 1;     while ( have_rows('services_list_best_digital_about') ) : the_row();
                                 if($ser == 1){
                                     $clacommon = 'web-des';
                                 }else if($ser == 2){
                                     $clacommon = 'market-des';
                                 }else if($ser == 3){
                                     $clacommon = 'email-des';
                                 }
                                 ?>
							<div class="common-web-des <?php echo $clacommon; ?>">
								<h4>
									<div class="common-des-icon">
										<img src="<?php the_sub_field('icon_services_list_best_digital_about'); ?>" alt="Icons">
									</div>
									<?php the_sub_field('title_services_list_best_digital_about'); ?>
								</h4>
							</div>
							<?php  $ser++; 
                          endwhile;
                          wp_reset_query();
                          wp_reset_postdata();
                        endif; ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- Best Digital End -->

	<!-- Digital Cogs Start -->
	<?php if(get_field('sub_title_our_mission_about') || get_field('title_our_mission_about') || get_field('description_our_mission_about')): ?>
	<section class="digital-cogs common-ptb common-plr">
		<div class="container-fluid">
			<div class="best-sub-grid">
				<div class="row">
					<div class="col-xl-6">
						<div class="marketing-des common-pr">
							<div class="common-head">
								<h5>
									<?php the_field('sub_title_our_mission_about'); ?>
								</h5>
								<h2><?php the_field('title_our_mission_about'); ?> <span><?php the_field('title_red_text_our_mission_about'); ?></span> <?php the_field('title_red_text_after_our_mission_about'); ?></h2>
								<?php the_field('description_our_mission_about'); ?>
								<div class="common-number-head">
									<?php the_field('description_number_list_our_mission_about'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="seo-img digital-img">
							<img src="<?php the_field('image_our_mission_about'); ?>" alt="Images">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- Digital Cogs End -->

	<!-- Get Better Start -->
	<?php if( get_field('title_digital_solution_globel', 'option') || get_field('digital_solution_globel', 'option') || get_field('button_link_globel', 'option')): ?>
	<section class="get-better" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/icons/about/digital-solution-bg.svg');">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="common-head">
						<h2><?php the_field('title_digital_solution_globel', 'option'); ?> <span><?php the_field('title_red_text_digital_solution_globel', 'option'); ?></span></h2>
						<?php the_field('digital_solution_globel', 'option'); ?>
						<?php if(get_field('button_link_globel', 'option')): ?>
						<a href="<?php the_field('button_link_globel', 'option'); ?>" class="btn btn-red"><?php the_field('button_caption_globel', 'option'); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- Get Better End -->

	<!-- Our Strength Start -->
	<?php if(have_rows('our_strengths_list_our_strengths_about') || get_field('sub_title_our_strengths_about') || get_field('title_our_strengths_about') || get_field('description_our_strengths_about')): ?>
	<section class="our-strength common-plr common-ptb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="common-head text-center">
						<h5>
							<?php the_field('sub_title_our_strengths_about'); ?>
						</h5>
						<h2><?php the_field('title_our_strengths_about'); ?> <span><?php the_field('title_red_text_our_strengths_about'); ?></span> <?php the_field('title_red_text_after_our_strengths_about'); ?></h2>

						<?php the_field('description_our_strengths_about'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="agency-list">
			<div class="container-fluid">
				<div class="row">
				    <?php 
                        if( have_rows('our_strengths_list_our_strengths_about') ):
                        while ( have_rows('our_strengths_list_our_strengths_about') ) : the_row();
                     ?>
					<div class="col-md-6 col-xl-3">
						<div class="agency-list-des">
							<div class="agency-list-icon">
								<img src="<?php the_sub_field('icon_list_our_strengths_about'); ?>" class="color-icon" alt="Icons">
								<img src="<?php the_sub_field('hover_icon_list_our_strengths_about'); ?>" class="white-icon" alt="Icons">
							</div>
							<h3>
								<?php the_sub_field('title_list_our_strengths_about'); ?>
							</h3>
							<p><?php the_sub_field('short_descriptionlist_our_strengths_about'); ?></p>
						</div>
					</div>
					<?php  
                          endwhile;
                          wp_reset_query();
                          wp_reset_postdata();
                        endif; ?>
					
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- Our Strength End -->

	<!-- Watch Video Start -->
	<?php if( get_field('sub_title_video_about') || get_field('title_video_about') || get_field('description_video_about')): ?>
	<section class="watch-video common-plr common-ptb" style="background-image: url('<?php the_field('background_image_video_about'); ?>');">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="common-head">
						<h5>
							<?php the_field('sub_title_video_about'); ?>
						</h5>
						<h2><?php the_field('title_video_about'); ?> <span><?php the_field('title_red_text_video_about'); ?></span> <?php the_field('title_red_text_after_video_about'); ?></h2>
						<?php the_field('description_video_about'); ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="watch-icon">
						<i class="fa fa-play"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- Watch Video End -->

	<!-- Testimonials Start -->
	<?php 
            //$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array('post_type' => 'testimonial', 'post_status' => 'publish', 'posts_per_page' => '-1');
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
        ?>
	<section class="about-testi testimonials text-center common-pb">
		<div class="container-fluid">
			<div class="row">
				<div class="offset-md-1 col-md-10">
					<div class="common-head">
						<h5>
							<?php the_field('sub_title_testimonial_globel', 'option'); ?>
						</h5>
						<h2><?php the_field('title_testimonial_globel', 'option'); ?> <span><?php the_field('title_red_text_testimonial_globel', 'option'); ?></span> <?php the_field('title_red_text_after_testimonial_globel', 'option'); ?></h2>

						<?php the_field('description_testimonial_globel', 'option'); ?>
					</div>
				</div>
				<div class="col-xl-8 offset-xl-2">
					<div class="testi-slider-main">
						<div class="slider slider-content">
							<?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div>
								<div class="new-testi-slider">
									<div class="testi-des">
										<div class="testi-img">
											<ul>
												<li>
												<?php $Blogfea_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
													<img src="<?php echo $Blogfea_img[0]; ?>" alt="Images">
												</li>
											</ul>
										</div>
									</div>
									<div class="testi-main-des">
										<?php the_content(); ?>
										<h3>
											<?php the_title(); ?>
										</h3>
										<h5>
											<?php the_field('position_testimonial'); ?>
										</h5>
									</div>
								</div>
							</div>
							<?php
                                endwhile;
                                wp_reset_query();
                                wp_reset_postdata();
                                  ?>
							
						</div>
						<div class="slider-width">
							<div class="slider slider-thumb">
								<?php while ($loop->have_posts()) : $loop->the_post(); ?>
								<div>
								    <?php $Blogfea_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
									<img src="<?php echo $Blogfea_img[0]; ?>" alt="Images">
								</div>
								<?php
                                endwhile;
                                wp_reset_query();
                                wp_reset_postdata();
                                  ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- Testimonials End -->

	<!-- Partner Start -->
	<?php if(have_rows('our_partners_logo_home', 'option') || get_field('sub_title_our_partners_home', 'option') || get_field('title_our_partners_home', 'option')): ?>
	<section class="partner-sec digital-partner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="common-head">
						<h5>
							<?php the_field('sub_title_our_partners_home', 'option'); ?>
						</h5>
						<h2> <?php the_field('title_our_partners_home', 'option'); ?><span><?php the_field('title_red_text_our_partners_home', 'option'); ?></span> <?php the_field('title_red_text_after_our_partners_home', 'option'); ?></h2>
					</div>
					<div class="owl-carousel client-slider owl-theme">
						<?php 
                                        if( have_rows('our_partners_logo_home', 'option') ):
                                        while ( have_rows('our_partners_logo_home', 'option') ) : the_row();
                                     ?>
						<div class="item">
							<img src="<?php the_sub_field('logo_our_partners_logo_home'); ?>" alt="Image">
						</div>
						<?php  
                          endwhile;
                          wp_reset_query();
                          wp_reset_postdata();
                        endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>
	<!-- Partner End -->

<?php get_footer(); ?>