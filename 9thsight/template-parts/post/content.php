<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<div class="wrap" data-router-wrapper="">
    <main data-router-view="renderer" class="page-content container">
    	 <!-- id="post-<?php the_ID(); ?>" <?php post_class(); ?> -->
		<article>
			<?php
			if ( is_sticky() && is_home() ) :
				echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
			endif;
			?>
			<section class="hero-image hero-image__<?php echo get_field('blog_hero_section_theme'); ?>">
				<div class="hero-image__wrap">
					<div class="hero-image__contain">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-md-8 ">
									<?php 
									if ( is_single() ) {
										the_title( '<h1 class="entry-title">', '</h1>' );
									} elseif ( is_front_page() && is_home() ) {
										the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
									} else {
										the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
									}
									?>
									<?php
										if ( 'post' === get_post_type() ) {
											echo '<h2 class="h3 blog-date">';
											if ( is_single() ) {
												twentyseventeen_posted_on();
											}
											echo '</h2>';
										};
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hero-image__background">
					<figure>
						<picture>
							<?php 
								$blog_image = get_field('blog_image');
								if( !empty( $blog_image ) ): 
							?>
								<img src="<?php echo esc_url($blog_image['url']); ?>" alt="<?php echo esc_attr($blog_image['alt']); ?>" />
							<?php endif; ?>
						</picture>
					</figure>
				</div>
			</section>
			<div class="blog__article">
			    <div class="blog__article__container">
			    	<div class="blog__article__pre">
			    		<div class="blog__article__author">
			    			<?php
			    				$author_profile_image = get_avatar(get_the_author_meta('ID'), 60);
								echo $author_profile_image;
							?>
			    			<div>
			    				<?php
									$author_display_name = get_the_author_meta('display_name');
									echo '<h3>Written by <span>'. $author_display_name .'</span></h3>'
								?>
			    				<div class="blog__article__details">
			    					<span>6 mins read</span> |
			    					<!-- <span>14th Jul 2023</span> -->
			    					 <?php the_date( 'j F, Y' ); ?>
			    				</div>
			    			</div>
			    		</div>
			    	</div>

					<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
						<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
							</a>
						</div><!-- .post-thumbnail -->
					<?php endif; ?>

					<div class="entry-content">
						<?php
						the_content(
							sprintf(
								/* translators: %s: Post title. */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
								get_the_title()
							)
						);
		
						?>
				</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->
	</main>