<?php 
/**
*Template Name: Contact us Template
 */
  get_header(); 
?>

<main class="page-content container" data-router-view="renderer">
  <article id="post-1211" class="post-1211 page type-page status-publish hentry">
    <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
    <h1><?php echo get_field('cotact_page_title')?></h1>
    <h2 class="color--primary h3 mono"><?php echo get_field('cotact_page_sub_title')?> 🎉</h2>
    <div class="gf_browser_chrome gform_wrapper gravity-theme" id="gform_wrapper_1">
      <div class="gform_heading">
        <h2 class="gform_title"><?php echo get_field('cotact_page_form_title')?></h2>
        
        <?php echo do_shortcode('[contact-form-7 id="ed2fb1a" title="Contact form"]'); ?>
      </div>
    </div>
    <section class="contact__details">
      <div class="row">
        <div class="contact__details__section col-xs-12 col-md-7">
          <div class="contact__details__row row ">
            <div class="col-xs-12 col-md-6">
              <h2 class="h3 color--primary">General</h2>
              <p class="h5">
                <a href="tel:<?php the_field('mobile_no', 'option'); ?>"><?php the_field('mobile_no', 'option'); ?></a>
              </p>
              <p class="h5">
                <a href="mailto:<?php the_field('company_email', 'option'); ?>"><?php the_field('company_email', 'option'); ?></a>
              </p>
            </div>
            <div class="col-xs-12 col-md-6">
              <h2 class="h3 color--primary">9th Studio</h2>
              <p class="h5"><?php the_field('address', 'option'); ?></p>
              <p class="mono color--primary">
                <a target="_blank" class="color--primary" href="<?php the_field('address_map', 'option'); ?>">Get directions</a>
              </p>
            </div>
          </div>
          <div class="contact__details__row row">
            <div class="col-xs-12 col-md-6">
              <h2 class="h3 color--primary">Start your career</h2>
              <p class="h5">
                <a href="mailto:<?php the_field('career_email', 'option'); ?>"><?php the_field('career_email', 'option'); ?></a>
              </p>
              </p>
            </div>
            <div class="col-xs-12 col-md-6">
            	<h2 class="color--primary h3">Follow us</h2>
            	<?php if( have_rows('social_platforms', 'option') ): ?>
    					<ul class="social__icons social__icons--isDark">
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
        </div>
        <div class="contact__details__section col-xs-12 col-md-5">
          <figure>
          	<?php 
      				$image = get_field('cotact_page_image');
      				if( !empty( $image ) ): ?>
      			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      			<?php endif; ?>
          </figure>
        </div>
      </div>
    </section>
  </article>
</main>
<script>
	document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://9thsight.com/thank-you';
}, false );
</script>
<?php get_footer(); ?>