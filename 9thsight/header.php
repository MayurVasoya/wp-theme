<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<title>Creative and Digital Marketing Agency - Web Design | 9th Sight</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-32x32.png" />
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Galano/GalanoGrotesque-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/Galano/GalanoGrotesque-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/MaisonNeue/maisonNeue-Mono.woff2" as="font" type="font/woff2" crossorigin>

	<!-- Custom Css Start -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style1.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
	<style type="text/css">
		@font-face {
		 font-family:"Galano Grotesque";
		 src:url("<?php echo get_template_directory_uri(); ?>/assets/fonts/Galano/GalanoGrotesque-Bold.woff2") format("woff2"),
		 url("<?php echo get_template_directory_uri(); ?>/assets/fonts/Galano/GalanoGrotesque-Bold.woff") format("woff");
		 font-weight:600;
		 font-style:normal;
		 font-display:swap
		}
		@font-face {
		 font-family:"Galano Grotesque";
		 src:url("<?php echo get_template_directory_uri(); ?>/assets/fonts/Galano/GalanoGrotesque-Regular.woff2") format("woff2"),
		 url("<?php echo get_template_directory_uri(); ?>/assets/fonts/Galano/GalanoGrotesque-Regular.woff") format("woff");
		 font-weight:400;
		 font-style:normal;
		 font-display:swap
		}
		@font-face {
		 font-family:Maison Neue;
		 font-style:"normal";
		 font-weight:400;
		 font-display:optional;
		 src:url("<?php echo get_template_directory_uri(); ?>/assets/fonts/MaisonNeue/maisonNeue-Mono.woff2") format("woff2"),
		 url("<?php echo get_template_directory_uri(); ?>/assets/fonts/MaisonNeue/maisonNeue-Mono.woff") format("woff");
		 font-display:swap
		}
	</style>
	
</head>
<body <?php body_class(); ?>>

	<!-- Header Start -->
	
<div class="page-transition">
  <div class="page-transition__path"></div>
  <div class="page-transition__path"></div>
  <div class="page-transition__path"></div>
</div>
<div data-scroll>
  <div data-scroll-content>
	<header class="main__navigation">
		<div class="container-fluid">
			<div class="main__navigation__wrap">
				<div class="main__navigation__logo">


					<?php 
						$image = get_field('site_logo', 'option');
						if( !empty( $image ) ): 
					?>
						<a href="<?php echo get_site_url(); ?>" target="_blank">
					    <img style="width:200px" class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</a>
					<?php endif; ?>
				</div>

				<nav class="main__navigation__menu">
					<div class="mobile-background">
						<div class="mobile-background__slice"></div>
						<div class="mobile-background__slice"></div>
						<div class="mobile-background__slice"></div>
					</div>
					<div class="menu-main-navigation-container">
						<ul id="menu-main-navigation" class="main__navigation__items">
							<?php
							global $post;
								
								if ($post) {
									$parents = get_post_ancestors($post->ID);
									$id = ($parents) ? $parents[count($parents) - 1] : $post->ID;
									$parent = get_page($id);
								}
								$header_menu_arr = array();
								$header_menu = wp_get_nav_menu_items('Header Menu');
								foreach ($header_menu as $hk => $hd) {
									if ($hd->menu_item_parent == 0) {
										$header_menu_arr[$hd->menu_item_parent][] = $hd;
									} else {
										$header_menu_arr[$hd->menu_item_parent][$hk][] = $hd;
									}
								}
								if (!empty($header_menu_arr[0])) {
									foreach ($header_menu_arr[0] as $h) {
										if (get_permalink() == $h->url) {
											$active = "current-menu-item current_page_item";
										} else {
											$active = "";
										}
										
										if (!array_key_exists($h->ID, $header_menu_arr)) {
											echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-8 menu-item-212 nav-item ' . $active . ' "><a href="' . $h->url . '" title ="' . $h->title . '">' . $h->title . '</a></li>' . PHP_EOL;
										} else {
											echo '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-405 ' . $active . '"><a href="' . $h->url . '">' . $h->title . '</a>' . PHP_EOL;
											echo '<ul class="sub-menu">';

											foreach ($header_menu_arr[$h->ID] as $h2) {
												if (get_permalink() == $h2[0]->url) {
													$submenuactive = "current-menu-item current_page_item";
												} else {
													$submenuactive = "";
												}
												if (!array_key_exists($h2[0]->ID, $header_menu_arr)) {
													echo '<li id="menu-item-404" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-404"><a href="' . $h2[0]->url . '"  title ="' . $h2[0]->title . '" >' . $h2[0]->title . '</a></li>' . PHP_EOL;
												} 
											}
											echo '</ul></li>';
										}
									}
								}
								?>   
						</ul>
					</div>
				</nav>
				<div @click="toggleMenu" class="main__navigation__mobile-menu">

					<span class="mobile-menu-button menu-toggle-text mono color--primary">
						Menu
					</span>

					<span class="mobile-menu-button menu-toggle-icon">
						<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="mobile-menu-button mobile-menu-button--open">
							<path fill="currentColor" d="M193.94 256L296.5 153.44l21.15-21.15c3.12-3.12 3.12-8.19 0-11.31l-22.63-22.63c-3.12-3.12-8.19-3.12-11.31 0L160 222.06 36.29 98.34c-3.12-3.12-8.19-3.12-11.31 0L2.34 120.97c-3.12 3.12-3.12 8.19 0 11.31L126.06 256 2.34 379.71c-3.12 3.12-3.12 8.19 0 11.31l22.63 22.63c3.12 3.12 8.19 3.12 11.31 0L160 289.94 262.56 392.5l21.15 21.15c3.12 3.12 8.19 3.12 11.31 0l22.63-22.63c3.12-3.12 3.12-8.19 0-11.31L193.94 256z"></path>
						</svg>

						<svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="mobile-menu-button mobile-menu-button--close">
							<path fill="currentColor" d="M442 114H6a6 6 0 0 1-6-6V84a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6zm0 160H6a6 6 0 0 1-6-6v-24a6 6 0 0 1 6-6h436a6 6 0 0 1 6 6v24a6 6 0 0 1-6 6z"></path>
						</svg>

					</span>

				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->


