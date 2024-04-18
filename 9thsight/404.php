<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

 get_header();
 ?>

<div class="wrap" data-router-wrapper="">
    <main data-router-view="renderer" class="page-content container">
		<section class="error__page">
		  <div class="container">
		    <div class="row">
		      <div class="col-xs-12 col-md-6">
		        <p class="h6 mono color--primary">There was a problem</p>
		        <h1>Page not found</h1>
		        <p>
		          Seems like somethings gone a bit wrong, why not head back to the home
		          page. Or if you have a question feel free to
		          <a href="<?php echo get_site_url(); ?>/contact" class="">
		            Contact us
		          </a>
		        </p>
		        <p>
		          <a href="<?php echo get_site_url(); ?>">
		            Go back to home
		          </a>
		        </p>
		      </div>
		    </div>
		  </div>
		</section>
    </main>
</div>

<?php get_footer(); ?>
