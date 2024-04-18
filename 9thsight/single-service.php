<?php 
/**
*
 */
  get_header(); 
  
?>
<div class="wrap" data-router-wrapper="">
  <main data-router-view="renderer" class="page-content container" data-transition-in="default">
    <article id="post-2027" class="post-2027 page type-page status-publish hentry">
      <section class="hero-image hero-image__theme--light" style="background:url(<?php the_post_thumbnail_url(); ?>);">
          <div class="hero-image__wrap">
          <div class="hero-image__contain">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-6 ">
                  <h1><?php the_title(); ?></h1>
                  <h2 class="h3"><?php the_field('service_title_text') ?></h2>
                  <a href="/contact" class="button button__secondary-solid">
                    <span>Enquire now</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div style="height:88px" aria-hidden="true" class="wp-block-spacer"></div>
      <h2><?php the_field('first_text_area_section_title') ?></h2>
      <?php the_field('first_text_area_section_text') ?>
      <div style="height:56px" aria-hidden="true" class="wp-block-spacer"></div>
      <div class="wp-block-media-text alignwide is-stacked-on-mobile">
        <figure class="wp-block-media-text__media">
          <?php 
          $image = get_field('first_two_part_section_image');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </figure>
        <div class="wp-block-media-text__content">
          <h2 style=""><strong><strong><?php the_field('first_two_part_section_title') ?></strong></strong></h2>
          <?php the_field('first_two_part_section_text') ?>
        </div>
      </div>
      <section class="enquire-block">
        <h2><?php the_field('lets_chat_title') ?></h2>
        <h3><?php the_field('lets_chat_sub_title') ?></h3>
        
        <div class="enquire-block__form">
          <div class="enquire-block__input-wrap">
            <?php if( have_rows('inquery_button') ): ?>
            <?php while( have_rows('inquery_button') ): the_row(); ?>
              <span data-target="<?php the_sub_field('button_link'); ?>" class="enquire-block__button">
                <span><?php the_sub_field('button_text'); ?></span>
              </span>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="enquire-block__small-text">
              <small><?php the_field('privacy_policy_text') ?></small>
          </div>
        </div>
      </section>
      <div class="wp-block-media-text alignwide is-stacked-on-mobile">
        <figure class="wp-block-media-text__media">
          <?php 
          $image = get_field('second_two_part_section_image');
          if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </figure>
        <div class="wp-block-media-text__content">
          <h2 style=""><strong><strong><?php the_field('second_two_part_section_title') ?></strong></strong></h2>
          <?php the_field('second_two_part_section_text') ?>
        </div>
      </div>
      <section class="our-products-slice">
        <h2 class="alignfull has-white-color has-text-color has-background" style="background-color: rgb(44, 44, 49);"><?php the_field('related_service_section_title', 'option'); ?></h2>
        <div class="products__slice">
          <div class="container">
            <div class="products__slice__container">
              <div class="row" data-anim="cards">
                <?php
                  if( have_rows('related_service_card', 'option') ):
                  while( have_rows('related_service_card', 'option') ) : the_row();
                ?>
                <div class="service__card">
                  <div class="service__card__wrap">
                    <div class="service__card__icon">
                      <?php $image = get_sub_field('related_service_image', 'option'); ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="">
                    </div>
                    <div class="service__card__content">
                      <h3 class="service__card__heading"><strong><?php the_sub_field('related_service_name', 'option'); ?></strong></h3>
                      <p class="service__card__body">– <?php the_sub_field('related_service_text', 'option'); ?></p>
                      <?php if( have_rows('service_url', 'option') ): ?>
                        <?php while( have_rows('related_service_url', 'option') ): the_row(); ?>
                          <a class="service__card__content__cite" href="<?php the_sub_field('related_service_url_link', 'option'); ?>">
                            <h6 class="service__card__cite__read">
                              <span><?php the_sub_field('related_service_url_name', 'option'); ?></span>
                            </h6>
                            <h6 class="service__card__cite__title">
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
                          </a>
                        <?php endwhile; ?>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <?php
                  endwhile;
                  endif;
                ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="wp-container-2 wp-block-group alignfull has-white-color has-text-color has-background" id="contact" style="background-color:#2c2c31">
        <div class="wp-block-group__inner-container">
          <h2>Find our more about our Website Design service</h2>
          <?php echo do_shortcode('[contact-form-7 id="1023" title="Service Inquiry Form" html_class="form service-form"]'); ?>
        </div>
        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
      </div>
    </article>
  </main>
</div>

<?php get_footer(); ?>