<!-- Swiper -->
<div class="swiper-container swiper-about">
    <div class="swiper-wrapper">
		
		<div class="swiper-slide">
			<div class="swiper-wrapper-about">
				<img class="slide-desktop" src="<?php echo get_theme_file_uri()?>/assets/img/slide-1.jpg" alt="">
				<img class="slide-mobile" src="<?php echo get_theme_file_uri()?>/assets/img/slide-1-mobile.jpg" alt="">
				<div class="swiper-inner-wrap">
					<div class="inner"> 
						<h3><?php the_field('slide_1_copy', 'option'); ?> </h3>
					</div>
				</div>
			</div>
        </div>
      	
		<div class="swiper-slide">
	 	 	<div class="swiper-wrapper-about">
				<img class="slide-desktop" src="<?php echo get_theme_file_uri()?>/assets/img/slide-2.jpg" alt="">
				<img class="slide-mobile" src="<?php echo get_theme_file_uri()?>/assets/img/slide-2-mobile.jpg" alt="">
				<div class="swiper-inner-wrap">
					<div class="inner">
						<h3><?php the_field('slide_2_copy', 'option'); ?> </h3>
						
					</div>
				</div>
			</div>
		 </div>
      	<div class="swiper-slide">
          <img class="slide-desktop" src="<?php echo get_theme_file_uri()?>/assets/img/slide-3.jpg" alt="">
          <img class="slide-mobile" src="<?php echo get_theme_file_uri()?>/assets/img/slide-3-mobile.jpg" alt="">
            <div class="swiper-inner-wrap">
				<div class="inner">
					<h3><?php the_field('slide_3_copy', 'option'); ?> </h3>
					
				</div>
			</div>
		</div>

	    <div class="swiper-slide swiper-slide-shapes">
		    <div class="swiper-inner-wrap swiper-inner-wrap-shapes" style="position: relative; background-image: url(<?php echo get_theme_file_uri()?>/assets/img/slide-2.jpg); background-size: cover;">
			    <div class="swiper-inner-header-2">
					<?php the_field('slide_4_copy', 'option'); ?>
			    </div>
			    <?php get_template_part('template-parts/about-shapes'); ?>
			    <h3 class="circle-header"> Excellence in </br>content production</h3>
		    </div>
	    </div>
    
		<div class="swiper-slide slide-very-heigh">
			<img class="slide-desktop" src="<?php echo get_theme_file_uri()?>/assets/img/slide-5.jpg" alt="">
			<img class="slide-mobile" src="<?php echo get_theme_file_uri()?>/assets/img/slide-5-mobile.jpg" alt="">
			<div class="swiper-inner-wrap extended-height">
				<div class="inner">
					<h3><?php the_field('slide_5_copy', 'option'); ?> </h3>
					
				</div>
			</div>
		</div>

		<div class="swiper-slide swiper-slide-links">
			<img class="slide-desktop" src="<?php echo get_theme_file_uri()?>/assets/img/slide-2.jpg" alt="">
			<img class="slide-mobile" src="<?php echo get_theme_file_uri()?>/assets/img/slide-2-mobile.jpg" alt="">
			<div class="swiper-inner-wrap">
				<div class="swiper-inner-header"><div class="white-underline">
					<?php the_field('slide_6_copy', 'option'); ?>
				</div></div>
				<div class="inner">
					<ul class="links-to-tabs">
						<li><a class="creative-production-el" href="#creative-production-section">Creative Production</a></li>
						<li><a class="creative-technology-el" href="#creative-technology-section">Creative Technology</a></li>
						<li><a class="global-delivery-el" href="#global-delivery-section">Global Delivery</a></li>
						<li><a class="content-strategy-el" href="#content-strategy-section">Content Strategy</a></li>
						<li><a class="performance-marketing-el" href="#performance-marketing-section">Performance Marketing</a></li>
					</ul>
				</div>
			</div> 
    	</div>

		
	</div>

  </div>
  <img class="arrow-down" src="<?php echo get_theme_file_uri() ?>/assets/img/arrow-right2.svg" alt="arrow down">


</svg>

