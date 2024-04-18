<?php 
/**
*
 */
  get_header(); 
  
?>
<div class="wrap" data-router-wrapper="">
  <main data-router-view="renderer" class="page-content container" data-transition-in="default">
    <section class="hero-image hero-image__theme--<?php echo get_field('card_theme'); ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
      <div class="hero-image__wrap">
        <div class="hero-image__contain">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-md-6 ">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="project__overview" data-anim="stagger">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>
              <span><?php echo get_the_title(); ?></span>
            </h1>
            <h3 class="color--primary">
              <span><?php echo get_field('title_slogan'); ?></span>
            </h3>
          </div>
          <div class="col-xs-12 col-md-5">
            <h4 class="h5">The brief</h4>
            <div>
              <?php echo get_field('the_brief_text'); ?>
            </div>
          </div>
          <div class="col-xs-12 col-md-5 col-md-offset-1">
            <h4 class="h5">The solution</h4>
            <?php echo get_field('the_solution_text'); ?>
            <div class="project__overview__services">
              <h4 class="h5">Services</h4>
              <?php if( have_rows('project_overview_services_list') ): ?>
              <ul>
                <?php while( have_rows('project_overview_services_list') ): the_row(); ?>
                 <li>
                   <a href="<?php echo get_sub_field('project_overview_service_url'); ?>">
                    <span class="mono color--primary"><?php echo get_sub_field('project_overview_service_name'); ?></span>
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
    <?php if( have_rows('work_images') ): ?>
      <?php while( have_rows('work_images') ): the_row(); ?>
        <?php 
          $image = get_sub_field('work_image', 'option');
          if( !empty( $image ) ): 
        ?>
          <figure class="wp-block-image alignfull size-full is-style-default" style="padding:10px 30px;">
            <img class="img-fluid" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>" src="<?php echo esc_url($image['url']); ?>" />
          </figure>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <section class="project__cta">
      <div class="project__cta__container">
        <h2>Got a project? Let’s chat…</h2>
        <h3 class="color--primary">Have a chat with one of the team on +1 (323) 840 1508 or fill in our contact form, to discuss how we can help you.</h3>
      </div>
    </section>
    <div class="project__divider">
      <svg width="120px" height="5px" viewBox="0 0 153 7" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-764.000000, -5728.000000)" fill="#000000">
            <g transform="translate(764.000000, 5728.000000)">
              <circle cx="3.5" cy="3.5" r="3.5"></circle>
              <circle cx="76.5" cy="3.5" r="3.5"></circle>
              <circle cx="149.5" cy="3.5" r="3.5"></circle>
            </g>
          </g>
        </g>
      </svg>
    </div>
    <section class="project__cards">
      <div>
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <h2>Dont stop yet… </h2>
            <h3 class="color--primary">Why don’t you have a look at more?</h3>
          </div>
        </div>
        <div class="row">
          <?php
             $args = array('post_type' => 'portfolio', 'post_status' => 'publish', 'posts_per_page' => '4','orderby' => 'rand');
             $loop = new WP_Query($args);
             if ($loop->have_posts()) :
             while ($loop->have_posts()) : $loop->the_post();
             
             $cats = get_the_category($id);
          ?>

          <div class="project__cards__col col-xs-12 col-sm-6 project__cards__col--no-offset" data-align="right">
            <div class="project__card project__card__theme--<?php echo get_field('card_theme'); ?>" data-anim="card">
              <a class="project__card__link" href="<?php the_permalink(); ?>">
                <div class="project__card__wrap">
                  <div class="project__card__content">
                    <h5 class="project__card__title">
                      <span><?php the_title(); ?></span>
                    </h5>
                    <h6 class="project__card__body">
                      <span><?php echo get_field('title_slogan'); ?></span>
                    </h6>
                  </div>
                  <div class="project__card__cite">
                    <h6 class="project__card__cite__view">
                      <span>
                        View project
                      </span>
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
                <div class="project__card__thumbnail">
                  <figure>
                    <?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
                  </figure>
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
<?php get_footer(); ?>