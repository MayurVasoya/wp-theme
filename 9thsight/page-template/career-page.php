<?php 
/**
*Template Name: Career Template
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
              <div class="col-lg-12">
                <h5>
                  <?php the_sub_field('title_slider_digi'); ?>
                </h5>
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
<!-- Current-Opening Start -->
<section class="common-ptb common-plr vacancy-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-10 offset-md-1">
        <div class="common-head digital-head text-center">
          <h2><?php the_field('title_current_opening'); ?></h2>
          <p class="text-center mt-lg-4"><?php the_field('text_current_opening_text'); ?></p>
        </div>
      </div>
    </div>
    <div class="our-strength vacancy">
      <div class="row agency-list mt-0">
        <?php if( have_rows('vacancy_list') ): ?>
          <div id="job-list" class="job-list col-12">
            <?php while( have_rows('vacancy_list') ): the_row(); ?>
              <div class="card">
                <div class="card-header" id="heading<?php the_sub_field('sr_no'); ?>">
                  <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php the_sub_field('sr_no'); ?>" aria-expanded="true" aria-controls="collapse<?php the_sub_field('sr_no'); ?>">
                    <h4><?php the_sub_field('job_title'); ?></h4>
                    <h6>Experience : <strong><?php the_sub_field('experiance'); ?></strong> | No. of Position : <strong><?php the_sub_field('no_of_vacany'); ?></strong></h6>
                  </button>
                </div>
                <div id="collapse<?php the_sub_field('sr_no'); ?>" class="collapse show" aria-labelledby="heading<?php the_sub_field('sr_no'); ?>" data-parent="#job-list">
                  <div class="card-body">
                    <?php the_sub_field('job_description'); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- Current-Opening End -->

<?php get_footer(); ?>