<?php if( have_rows('our_offices', 'option') ): ?>

<?php while( have_rows('our_offices', 'option') ): the_row(); ?>
    <div class="office-wrap" id="<?php the_sub_field('office_id', 'option'); ?>">
        <div class="office-details">
					<h3><?php the_sub_field('city', 'option'); ?></h3>
					<?php the_sub_field('address', 'option'); ?>
				</div>
				<div class="office-details-contact">
					<?php if( get_sub_field('phone_number', 'option') ): ?>
					<a class="phone-number" href="tel:<?php the_sub_field('phone_number', 'option'); ?>"><?php the_sub_field('phone_number', 'option'); ?></a>
					</br>
					<?php endif; ?>
					<a class="email" href="mailto:<?php the_sub_field('email', 'option'); ?>"><?php the_sub_field('email', 'option'); ?></a>
				
					<?php if( get_sub_field('second_email', 'option') ): ?>
					<a class="email" href="mailto:<?php the_sub_field('second_email', 'option'); ?>"><?php the_sub_field('second_email', 'option'); ?></a>
					<?php endif; ?>
				</div>

				<?php if( get_sub_field('map', 'option') ): ?>
					<a class="map-link" href="<?php the_sub_field('map', 'option'); ?>" target="_blank"><strong>Map</strong></a>
				<?php endif; ?>
        <div class="office-social-media">
            <ul>
                <li><a href="<?php the_sub_field('linkedin', 'option'); ?>">LinkedIn</a></li>
            </ul>
        </div>

        <div class="office-details-open">
            <a class="close close-contact"><img src="<?php echo get_theme_file_uri()?>/assets/img/star-icon.png" alt="cylndr"></a> 
        </div>
    </div>

<?php endwhile; ?>

<?php endif; ?>
