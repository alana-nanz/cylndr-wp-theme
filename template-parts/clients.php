
<div class="header-white-wrap">
    <h3>Clients</h3>
</div>
<?php // CSS Slider ?>


                  
<?php if( have_rows('our_clients', 'option') ): ?>
   
   <?php while( have_rows('our_clients', 'option') ): the_row(); ?>
        
		<?php 
		$image = get_sub_field('client_logo', 'option');
		if( !empty( $image ) ): ?>
		<div class="logo-wrap">	<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
		<?php endif; ?>
					
   <?php endwhile; ?>

<?php endif; ?>
