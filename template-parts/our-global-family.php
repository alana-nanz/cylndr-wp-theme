<?php if( have_rows('our_global_family', 'option') ): ?>
	<p class="our-global-family">Our Global Family</p>
	<div class="logos">
		<?php while( have_rows('our_global_family', 'option') ): the_row(); ?>
		<a href="<?php the_sub_field('company_website', 'option'); ?>" target="_blank">
		 <?php $image = get_sub_field('company_logo', 'option');
				 if( !empty( $image ) ): ?>
				 <img class="footer-logos" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			 <?php endif; ?> 
			 </a>
		<?php endwhile; ?>
	</div>
<?php endif; ?>
