<?php 
/**
*Template Name: Services Template
 */
  get_header(); 
?>
<div class="wrap" data-router-wrapper="">
  <main data-router-view="renderer" class="page-content container">
    <article id="post-1372" class="post-1372 page type-page status-publish hentry">
      <section class="services__slice">
        <div class="container">
          <div class="services__slice__title">
            <div class="services__slice__row">
              <div class="col-xs-12 col-md-6 " data-anim="stagger">
                <h1><?php echo esc_html( get_field('services_section_title', 'option') ); ?></h1>
                <h2 class="h3"><?php echo esc_html( get_field('services_section_sub_title', 'option') ); ?></h2>
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
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </section>
      <section class="our-products-slice">
        <h2 class="alignfull has-white-color has-text-color has-background" style="background-color: rgb(44, 44, 49);"><?php the_field('related_service_section_title'); ?></h2>
        <div class="products__slice">
          <div class="container">
            <div class="products__slice__container">
              <div class="row" data-anim="cards">
                <?php
                  if( have_rows('related_service_card') ):
                  while( have_rows('related_service_card') ) : the_row();
                ?>
                <div class="service__card">
                  <div class="service__card__wrap">
                    <div class="service__card__icon">
                      <?php $image = get_sub_field('related_service_image'); ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="">
                    </div>
                    <div class="service__card__content">
                      <h3 class="service__card__heading"><strong><?php the_sub_field('related_service_name'); ?></strong></h3>
                      <p class="service__card__body">– <?php the_sub_field('related_service_text'); ?></p>
                      <?php if( have_rows('related_service_url') ): ?>
                        <?php while( have_rows('related_service_url') ): the_row(); ?>
                          <a class="service__card__content__cite" href="<?php the_sub_field('related_service_url_link'); ?>">
                            <h6 class="service__card__cite__read">
                              <span><?php the_sub_field('related_service_url_name'); ?></span>
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