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
	
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- Instrument Sans -->
	<link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
	<!-- Instrument Serif -->
	<link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
	<!-- Dharma Gothic E-->
	<link rel="stylesheet" href="https://use.typekit.net/vyx0ywd.css">
	
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
				viewBox="0 0 150 74.72" style="enable-background:new 0 0 150 74.72;" xml:space="preserve">

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
				fill:  #EEFF00;
				transition: .35s ease-in-out;

			svg:hover {
				fill:  #EEFF00;
				transition: .35s ease-in-out;
			}
			</style>	
			 <path class="cls-1" d="M9.79,37.62c0,2.1.21,2.8,1.89,2.8h.7c1.68,0,1.89-.7,1.89-2.8v-7.65c0-.27.22-.5.5-.5h8.17c.27,0,.5.22.5.5v8.83c0,8.39-1.96,10.84-9.65,10.84h-4.06c-7.69,0-9.72-2.45-9.72-10.84V10.84C0,2.45,2.03,0,9.72,0h4.06c7.69,0,9.65,2.45,9.65,10.84v9.03c0,.27-.22.5-.5.5h-8.17c-.27,0-.5-.22-.5-.5v-7.84c0-2.1-.21-2.8-1.89-2.8h-.7c-1.68,0-1.89.7-1.89,2.8v25.59ZM31.81,48.8v-14.12L24.25.96c-.07-.31.17-.61.48-.61h8.83c.24,0,.44.17.49.4l1.39,7.29c.49,2.59,1.02,6.4,1.46,10.7.04.44.68.44.73,0,.44-4.3.97-8.11,1.45-10.7l1.39-7.29c.04-.23.25-.4.49-.4h7.78c.32,0,.55.3.48.61l-7.62,33.73v14.12c0,.27-.22.5-.5.5h-8.8c-.27,0-.5-.22-.5-.5ZM51.3.35h8.8c.27,0,.5.22.5.5v38.72c0,.27.22.5.5.5h6.21c.27,0,.5.22.5.5v8.24c0,.27-.22.5-.5.5h-16c-.27,0-.5-.22-.5-.5V.85c0-.27.22-.5.5-.5ZM97.77.85c0-.27.22-.5.5-.5h13.84c7.69,0,9.65,2.45,9.65,10.84v27.27c0,8.39-1.96,10.84-9.65,10.84h-13.84c-.27,0-.5-.22-.5-.5V.85ZM110.15,40.07c1.61,0,1.82-.7,1.82-2.8V12.38c0-2.1-.21-2.8-1.82-2.8h-2.09c-.27,0-.5.22-.5.5v29.49c0,.27.22.5.5.5h2.09ZM94.56.35h-7.47c-.27,0-.5.22-.5.5l.12,22.85s-.01.23-.24.23-.27-.23-.27-.23L81.13.75c-.04-.23-.25-.4-.49-.4h-9.63c-.27,0-.5.22-.5.5v47.95c0,.27.22.5.5.5h7.4c.27,0,.5-.22.5-.5l-.11-25.1s-.01-.31.24-.31c.22,0,.26.31.26.31l5.69,25.21c.05.23.25.39.49.39h9.1c.27,0,.5-.22.5-.5V.85c0-.27-.22-.5-.5-.5ZM140.16,49.3h8.79c.27,0,.5-.22.5-.5l-1-13.77c-.5-5.88-.98-9.38-4.33-10.57,3.36-1.19,4.33-3.62,4.33-9.57v-3.71c0-8.39-1.96-10.84-9.72-10.84h-13.77c-.27,0-.5.22-.5.5v47.95c0,.27.22.5.5.5h8.8c.27,0,.5-.22.5-.5v-19.29c0-.28.23-.5.5-.5h1.31c2.1,0,2.47,1.77,2.59,4.07l1,15.72c0,.27.22.5.5.5ZM136.85,19.78h-2.09c-.27,0-.5-.22-.5-.5v-9.2c0-.27.22-.5.5-.5h2.09c1.61,0,1.82.7,1.82,2.8v3.99c0,2.1-.21,3.41-1.82,3.41ZM77.72,68.03c0-1.9-.71-2.51-2.95-4.35-2.41-2.04-3.57-3.36-3.57-6.86v-.95c0-4.07.98-5.26,4.72-5.26h1.87c3.73,0,4.69,1.19,4.69,5.26v2.49c0,.22-.18.39-.39.39h-3.66c-.22,0-.39-.18-.39-.39v-1.91c0-1.02-.14-1.36-.92-1.36h-.27c-.81,0-.92.34-.92,1.26v.44c0,1.87.75,2.51,2.95,4.35,2.45,2.04,3.6,3.36,3.6,6.86v1.46c0,4.07-.98,5.26-4.69,5.26h-1.9c-3.7,0-4.69-1.19-4.69-5.26v-3.17c0-.22.18-.39.39-.39h3.66c.22,0,.39.18.39.39v2.59c0,1.02.1,1.36.88,1.36h.31c.78,0,.88-.34.88-1.36v-.85ZM145.25,68.03c0-1.9-.71-2.51-2.95-4.35-2.41-2.04-3.57-3.36-3.57-6.86v-.95c0-4.07.98-5.26,4.72-5.26h1.87c3.73,0,4.69,1.19,4.69,5.26v2.49c0,.22-.18.39-.39.39h-3.66c-.22,0-.39-.18-.39-.39v-1.91c0-1.02-.14-1.36-.92-1.36h-.27c-.81,0-.92.34-.92,1.26v.44c0,1.87.75,2.51,2.95,4.35,2.45,2.04,3.6,3.36,3.6,6.86v1.46c0,4.07-.98,5.26-4.69,5.26h-1.9c-3.7,0-4.69-1.19-4.69-5.26v-3.17c0-.22.18-.39.39-.39h3.66c.22,0,.39.18.39.39v2.59c0,1.02.1,1.36.88,1.36h.31c.78,0,.88-.34.88-1.36v-.85ZM86.35,74.55c-.27,0-.5-.22-.5-.5v-18.32c0-.27-.22-.5-.5-.5h-1.52c-.27,0-.5-.22-.5-.5v-3.45c0-.27.22-.5.5-.5h8.78c.27,0,.5.22.5.5v3.45c0,.27-.22.5-.5.5h-1.52c-.27,0-.5.22-.5.5v18.32c0,.27-.22.5-.5.5h-3.76ZM98.83,68.88c0,1.02.1,1.36.88,1.36h.37c.78,0,.88-.34.88-1.36v-17.64c0-.25.2-.45.45-.45h3.57c.25,0,.45.2.45.45v18.22c0,4.07-.95,5.26-4.69,5.26h-1.97c-3.73,0-4.72-1.19-4.72-5.26v-18.22c0-.25.2-.45.45-.45h3.84c.25,0,.45.2.45.45v17.64ZM106.84,50.78h6.96c3.73,0,4.69,1.19,4.69,5.26v13.24c0,4.07-.95,5.26-4.69,5.26h-6.96v-23.77ZM112.85,70.07c.78,0,.88-.34.88-1.36v-12.09c0-1.02-.1-1.36-.88-1.36h-1.26v14.8h1.26ZM119.84,51.28c0-.27.22-.5.5-.5h3.76c.27,0,.5.22.5.5v22.77c0,.27-.22.5-.5.5h-3.76c-.27,0-.5-.22-.5-.5v-22.77ZM125.92,55.87c0-4.07.98-5.26,4.72-5.26h2.24c3.73,0,4.72,1.19,4.72,5.26v13.58c0,4.07-.98,5.26-4.72,5.26h-2.24c-3.73,0-4.72-1.19-4.72-5.26v-13.58ZM132.85,56.45c0-1.02-.1-1.36-.92-1.36h-.34c-.81,0-.92.34-.92,1.36v12.43c0,1.02.1,1.36.92,1.36h.34c.82,0,.92-.34.92-1.36v-12.43Z"/>
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

