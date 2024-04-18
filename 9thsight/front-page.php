<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap" data-router-wrapper>
	
	<main data-router-view="renderer" class="page-content container" data-transition-in="default">
    <article id="post-1371" class="post-1371 page type-page status-publish hentry">
      <div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
      <div class="wp-block-columns">
        <div class="wp-block-column" style="flex-basis:80%">
          <h1><?php echo get_field('top_section_title'); ?></h1>
          <h2 class="color--primary h3"><?php echo get_field('top_section_sub_title'); ?></h2>
        </div>
        <div class="wp-block-column"></div>
      </div>
      <section class="latest-projects project__cards">
        <div>
          <div class="row">
            <?php
               $args = array('post_type' => 'portfolio', 'post_status' => 'publish', 'posts_per_page' => '6');
               $loop = new WP_Query($args);
               if ($loop->have_posts()) :
               while ($loop->have_posts()) : $loop->the_post();
               
               $cats = get_the_category($id);
            ?>

            <div class="project__cards__col col-xs-12 col-sm-6 <?php echo ($loop->current_post == 5?'project__cards__col--last':''); ?>" data-align="<?php echo ($loop->current_post%2 == 0?'right':'left'); ?>">
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
                      <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
                    </figure>
                  </div>
                </a>
              </div>
              <?php if ($loop->current_post == 5) { ?>
                 <a class="project__cards__button" href="/portfolio">
                  View all projects
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
                </a>
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
      </section>

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
      <section class="client_testimonial latest__articles">
        <div class="container latest__articles__container">
          <h2 style="text-align: center;">The good feelings are mutual.</h2>
          <!-- <h3><?php echo esc_html( get_field('services_section_sub_title', 'option') ); ?></h3> -->
        </div>
        <div class="container latest__articles__container">
          <!-- <div class="row"> -->
            <?php 
              $args = array(
                'post_type'      => 'testimonial',
                'post_status'    => 'publish',
                'order' => 'DESC',
                'posts_per_page' => -1,
              );
            ?>
            <?php
              $loop = new WP_Query( $args );
              if ($loop->have_posts()) :
            ?>
            <div class="owl-carousel owl-theme">
              <?php
                while ($loop->have_posts()) : $loop->the_post();
              ?>
              <div class="item">
                  <p class="client-text"><?php the_content(); ?></p>
                 <h4 class="client-name"> <?php the_title(); ?></h4>
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
      <?php
          // Show the selected front page content.
          if ( have_posts() ) :
            while ( have_posts() ) :
              the_post();
              get_template_part( 'template-parts/page/content', 'front-page' );
            endwhile;
          else :
            get_template_part( 'template-parts/post/content', 'none' );
          endif;
          ?>

          <?php
          // Get each of our panels and show the post data.
          if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

            /**
             * Filters the number of front page sections in Twenty Seventeen.
             *
             * @since Twenty Seventeen 1.0
             *
             * @param int $num_sections Number of front page sections.
             */
            $num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
            global $twentyseventeencounter;

            // Create a setting and control for each of the sections available in the theme.
            for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
              $twentyseventeencounter = $i;
              twentyseventeen_front_page_section( null, $i );
            }

        endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here.
          ?>

      </article>
	</main>
</div><!-- #wrap -->

<?php
get_footer();
