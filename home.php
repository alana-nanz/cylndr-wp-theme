<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * Template Name: Home
 * @package mint-new
 */

get_header();
?>

    <section id="hero" class="coming-soon hero">
        <?php get_template_part('template-parts/hero'); ?>
    </section>

    <section id="projects" class="projects">
        <?php get_template_part('template-parts/projects'); ?>
    </section>

    <section id="about" class="who-we-are about">
        <?php get_template_part('template-parts/about'); ?>
    </section>

    <section id="what-we-do">
    <?php get_template_part('template-parts/what-we-do'); ?>
    <?php get_template_part('template-parts/what-we-do-mobile'); ?>

        <!-- <div class="back-to-top">
            <a href="#hero">
	            <span>Back to top</span>
	            <svg class="arrow-down arrow-down-mobile" xmlns="http://www.w3.org/2000/svg" width="32.508" height="38.464" viewBox="0 0 32.508 38.464">
		            <path id="Path_1" data-name="Path 1" d="M-422.612-166.925h8.866L-430-150.67l-16.254-16.255h8.866v-22.209h14.776Z" transform="translate(446.254 189.134)" fill="#af6164"/>
	            </svg>
            </a>
        </div> -->
    </section>

		<section id="clients">
    	<?php get_template_part('template-parts/clients'); ?>
    </section>


<?php
get_footer();
