<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<footer class="main__footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4">
				<div class="main__footer__project">
					<h2 class="h6">
						Got a project? Let’s chat…
					</h2>
					<h4>
						<a href="tel:<?php the_field('mobile_no', 'option'); ?>"><?php the_field('mobile_no', 'option'); ?></a>
					</h4>
					<h4>
						<a href="mailto:<?php the_field('company_email', 'option'); ?>"><?php the_field('company_email', 'option'); ?></a>
					</h4>
				</div>
				<div class="main__footer__contact__link">
					<ul>
						<li>
							<a href="<?php the_field('whats_up_link', 'option'); ?>">
							<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
								<style type="text/css">
									/*.st0{fill:#FFFFFF;}*/
								</style>
								<g>
									<path class="st0" d="M456.7,0H55.3C24.8,0,0,24.8,0,55.3v401.3C0,487.2,24.8,512,55.3,512h401.3c30.6,0,55.3-24.8,55.3-55.3V55.3
										C512,24.8,487.2,0,456.7,0L456.7,0z M257.6,401.9L257.6,401.9c-25.1,0-49.7-6.3-71.5-18.2l-79.2,20.8l21.2-77.5
										c-13.1-22.7-20-48.4-19.9-74.7c0-82.4,67.1-149.5,149.5-149.5c40,0,77.5,15.6,105.7,43.8c28.2,28.2,43.7,65.8,43.7,105.7
										C407.1,334.9,340,401.9,257.6,401.9L257.6,401.9z M257.7,128.1c-68.5,0-124.3,55.7-124.3,124.2c0,23.5,6.6,46.3,19,66.1l3,4.7
										L142.8,369l47-12.3l4.5,2.7c19.1,11.3,40.9,17.3,63.2,17.3h0c68.5,0,124.2-55.7,124.2-124.2c0-33.2-12.9-64.4-36.3-87.9
										C322.1,141.1,290.9,128.1,257.7,128.1L257.7,128.1z M330.8,305.8c-3.1,8.7-18,16.7-25.2,17.8c-6.4,1-14.6,1.4-23.5-1.5
										c-5.4-1.7-12.4-4-21.3-7.9c-37.5-16.2-61.9-53.9-63.8-56.4c-1.9-2.5-15.3-20.2-15.3-38.6c0-18.4,9.6-27.4,13.1-31.2
										c3.4-3.7,7.5-4.7,10-4.7s5,0,7.2,0.1c2.3,0.1,5.4-0.9,8.4,6.4c3.1,7.5,10.6,25.9,11.5,27.7c0.9,1.9,1.5,4.1,0.3,6.5
										c-1.2,2.5-1.9,4.1-3.7,6.2c-1.9,2.2-3.9,4.9-5.6,6.5c-1.9,1.9-3.8,3.9-1.6,7.6c2.2,3.7,9.7,16,20.8,25.9
										c14.3,12.7,26.3,16.7,30,18.5c3.7,1.9,5.9,1.6,8.1-0.9c2.2-2.5,9.3-10.9,11.8-14.6c2.5-3.7,5-3.1,8.4-1.9
										c3.4,1.2,21.8,10.3,25.5,12.1c3.7,1.9,6.2,2.8,7.2,4.4C333.9,289.6,333.9,297,330.8,305.8L330.8,305.8z"/>
								</g>
							</svg>
							</a>
						</li>
						<li>
							<a href="<?php the_field('skype_link', 'option'); ?>">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<style type="text/css">
										/*.st0{fill:#FFFFFF;}*/
									</style>
									<g id="Layer_2_1_">
										<g id="skype">
											<g id="icon">
												<path class="st0" d="M226.1,211c0,9,4.3,12.5,29.9,18.7c1.6,0.4,3.3,0.8,5.1,1.3c28.2,6.7,70.7,16.8,70.7,63.7
													c0,23.1-11.4,40.7-32,49.5c-14.1,6.1-29.9,7.1-43.8,7.2h-2c-44.2,0-72.1-34.4-73.2-35.8c-7.4-9-6.1-22.2,2.9-29.6
													c9-7.4,22.2-6.1,29.6,2.9c0.1,0.2,0.3,0.3,0.4,0.5c0,0,16.8,19.2,40.4,20h1.9c26.8,0.5,33-7.8,33.8-14.8
													c1-8.4-6.1-14.5-33.8-21.7c-1.5-0.4-2.9-0.8-4.6-1.2c-26.8-6.1-67.3-15.6-67.3-58.9c0-13.2,5.3-55.6,71.9-57.3h4
													c44.4,0,70.6,34.9,71.7,36.5c6.9,9.3,5,22.5-4.4,29.4c-9.3,6.9-22.5,5-29.4-4.4c-0.5-0.6-15.5-17.5-38-19.5c-1.3,0-2.6-0.2-4-0.2
													C240.4,196.7,226.1,202.6,226.1,211L226.1,211z"/>
												<path class="st0" d="M442.2,0H69.8C31.3,0,0,31.3,0,69.8v372.4C0,480.7,31.3,512,69.8,512h372.4c38.6,0,69.8-31.3,69.8-69.8V69.8
													C512,31.3,480.7,0,442.2,0z M416,324c-1.9,34.3-29,61.9-63.3,64.4c-7.8,0.6-15.7-0.3-23.3-2.4c-8.3-2.2-17.2-1.8-25.3,1.2
													c-72.4,26.6-152.6-10.6-179.2-83c-5.7-15.4-8.6-31.8-8.6-48.2c0.1-8.7-2.5-17.2-7.4-24.3c-22.1-30.5-15.3-73.2,15.3-95.3
													c16.9-12.2,38.4-16.1,58.5-10.4c8.3,2.3,17.2,1.8,25.3-1.2c72.4-26.5,152.6,10.7,179.1,83.1c5.6,15.4,8.5,31.7,8.5,48.1
													c-0.1,8.7,2.5,17.2,7.4,24.3C412.3,292.9,416.8,308.3,416,324L416,324z"/>
											</g>
										</g>
									</g>
								</svg>
							</a>
						</li>
					</ul>
				</div>
				
			</div>
			<div class="col-xs-12 col-md-2 col-md-offset-1">
				<div class="main__footer__policies">
					<h6>
						9th Studio
					</h6>
					<p class="mono">
						<?php while( have_rows('policy_page', 'option') ) : the_row(); ?>
							<a href="<?php the_sub_field('page_url');  ?>">
								<?php the_sub_field('page_name');  ?>
							</a><br>
						<?php endwhile; ?>
					</p>
				</div>
				<!-- <div class="main__footer__office">
					<h6>
						9th Studio
					</h6>
					<p>
						<strong>
							<?php the_field('address', 'option'); ?>
						</strong>
					</p>
				</div> -->
				<div class="main__footer__social">
					<h6>
						Follow us
					</h6>
					<?php if( have_rows('social_platforms', 'option') ): ?>
					<ul class="social__icons">
						<?php while( have_rows('social_platforms', 'option') ) : the_row(); ?>
							<li>
								<a href="<?php the_sub_field('social_platform_link');  ?>" target="_blank" aria-label=" <?php the_sub_field('social_platform_name'); ?>" rel="noopener nofollow">
									<?php the_sub_field('social_platform_icon');  ?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-md-offset-1">
				<div class="main__footer__newsletter">
					<h6>
						Subscribe to our newsletter
					</h6>
					<div id="subscribe">
						<?php echo do_shortcode('[contact-form-7 id="781" title="Subscribe form"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- <script src="https://edge.fullstory.com/s/fs.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script type="text/javascript">
	// Options for the first group
Fancybox.bind('[data-fancybox]',{
});
Fancybox.defaults.Hash = false;

</script>
<script type="text/javascript">
	jQuery(document).ready(function(){
  var owl = jQuery('.owl-carousel');
  owl.owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    items: 1,
    autoplay: true,
    autoplayTimeout: 3000
  });
  
  // Custom Button
  // jQuery('.customNextBtn').click(function() {
  //   owl.trigger('next.owl.carousel');
  // });
  // jQuery('.customPreviousBtn').click(function() {
  //   owl.trigger('prev.owl.carousel');
  // });
  
});
</script>
<script type="text/javascript">
    jQuery('.portfolio .filters ul li').on("click", function(){
			$(this).siblings().removeClass('active');
			$(this).addClass('active');
			var filter = jQuery(this).attr('data-filter');
			if (filter == '*') {
				jQuery('.col-portfolio').show(500);
			} else {
				jQuery('.col-portfolio').not('.'+filter).hide(500);
				jQuery('.col-portfolio').filter('.'+filter).show(500);
			}
		});
  </script>
</div>
</div>
<?php wp_footer(); ?>

</body>
</html>

