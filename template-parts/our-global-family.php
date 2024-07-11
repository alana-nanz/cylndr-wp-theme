<div class="header-white-wrap desktop">
    <h3>Our global family</h3>
</div>

<div class="family-flex">
<div class="container-fluid">
<div class="row no-gutters">
                  
<?php if( have_rows('our_global_family', 'option') ): ?>
   
   <?php while( have_rows('our_global_family', 'option') ): the_row(); ?>
         
   <div class="col-sm-6 col-md-2">
        <div class="family-item">
            <style>
                a .bg_cover.image_item {
                background-repeat: no-repeat;
                background-position: center center; 
                background-color: #0E0D1D;
             
                }
                a #<?php the_sub_field('company_id', 'option'); ?>:hover {
                    background-color: <?php the_sub_field('company_background_color', 'option'); ?> !important;
                }
                

             
            </style>
        
            <a href="<?php the_sub_field('company_website', 'option'); ?>" target="_blank">
                <figure id="<?php the_sub_field('company_id', 'option'); ?>" class="bg_cover image_item" style="">
                    <div class="hover">
                        <p class="hover-element"> <?php esc_url(the_sub_field('company_motto', 'option')); ?></p>
                    </div>

                    <?php 
                    $image = get_sub_field('company_logo', 'option');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                                
                </figure>
                
                
            </a>
        </div>
    </div>

   <?php endwhile; ?>

<?php endif; ?>

</div>
</div>
</div>
