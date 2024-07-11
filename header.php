<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mint-new
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=11">
	<meta property="og:url" content="">
	<meta property="og:image" content="">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'mint-dev'); ?></a>
		<header id="masthead" class="site-header">
			<div class="site-branding">
			<a class="company-logo" href="<?php echo home_url(); ?>">
				<!-- <img class="logo" src="<?php echo get_theme_file_uri()?>/assets/img/cylndr.svg" alt="cylndr logo"> -->
			
			<svg class="logo" version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" fill="#E5E5DB"
				viewBox="0 0 688.15 149.07" style="enable-background:new 0 0 688.15 149.07;" xml:space="preserve">

			<style>
			svg.logo {
				width: 200px;
			}
			@media screen and (max-width: 1024px) {
				svg.logo {
					width: 130px;
				}
			}

		
			svg:hover {
				fill:  #0000fd;
				transition: .35s ease-in-out;

			svg:hover {
				fill:  #0000fd;
				transition: .35s ease-in-out;
			}
			</style>	
			<path d="M153.31,61.38l-36.9-60.25L77.13,1.15C37.34,1.35,5.21,33.29,5.21,73.67c0,0.21-0.02,0.65-0.02,0.65
				c0,36.08,25.55,65.97,59.34,71.64c5.77,1.21,11.61,1.9,17.62,1.9c3.24,0,6.48-0.23,9.69-0.66l0.16-25.18
				c-1.89,0.22-3.81,0.34-5.76,0.34c-2.81,0-5.38,0.01-8.14-0.32c-2.32-0.18-4.64-0.74-6.81-1.25l0,0c-0.02,0-0.04-0.01-0.06-0.01
				c-15.16-3.59-28.19-14.91-33.14-30.01c0,0-2.98-8.31-2.94-16.99c0.11-23.72,19.39-47.13,41.98-46.78
				c18.21-0.32,21.54,0.08,21.54,0.08l39.15,63.12v57.16h30.94V90.19l55.06-89.06l-33.45,0L153.31,61.38z"/>
			<polygon points="262.58,1.13 231.52,1.13 231.52,147.35 323.72,147.35 323.72,120.73 262.58,120.73 "/>
			<path d="M651.55,100.97c16.58-8.97,27.5-26.13,27.5-46.61c0-30.23-23.98-53.23-54.01-53.23l-58.51-0.01v146.26h31.2V107.6h0.05
				l-0.06-26.78l0.01,0V27.06h25.16c16.58,0,24.96,11.51,24.96,27.31c0,15.79-8.11,27.3-24.96,27.3h-19.22l44.57,65.72h34.71
				L651.55,100.97z"/>
			<path d="M487.67,1.13l-58.24,0l0,96.44L363.38,1.14l-32.18,0l-0.01,146.25h31.2V50.86l65.92,96.53h32.37h0.18l-0.18-120.14h26.79
				c23.91,0.39,40.58,23.72,40.58,47.44c0,0.4,0,3.97-0.01,4.37c-0.48,20.34-12.97,40.23-31.9,45.09l12.94,23.79
				c28.89-9.25,49.83-36.45,50.34-68.88c0.01-0.4,0.01-3.97,0.01-4.37C559.41,34.31,527.46,1.32,487.67,1.13"/>
			</svg>

			</a> 
				




				<?php 
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title">
						<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
							<?php bloginfo('name'); ?>
						</a>
					</p>
				<?php
				endif;
				$mint_dev_description = get_bloginfo('description', 'display');
				if ($mint_dev_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $mint_dev_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<a class="open-button"> 
				<div class="open-img">
					<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
						<path id="Path_1" data-name="Path 1" d="M17.5,0A17.5,17.5,0,1,0,35,17.5,17.455,17.455,0,0,0,17.5,0ZM14.9,18.5h-9V16.4h9Zm14.3,0H18.5V29.1H16.4V5.8h2.1V16.4H29.1v2.1Z" fill="#e6e4d9"/>
					</svg>
				</div>
			</a> 
			

			<nav class="main-navigation closed">
				<?php mint_main_menu(); ?>
				<div class="mobile-copyright">
					<a href="/tax-strategy">Tax Strategy</a>
					<a href="/privacy-policy">Privacy Policy</a>
					<p>Copyright &copy; <?php echo date('Y'); ?>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
	</div>
</nav><!-- #site-navigation -->
</header><!-- #masthead -->

