<style>
.overlay {
    position: relative;
    overflow: hidden;
}
.overlay .project-cover-before {
    opacity: 1;
    position: absolute;
    top: 0;
    left: 0;
}

.overlay .project-cover-after {
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
}

.overlay:hover .project-cover-after {
    opacity: 1;
    position: absolute;
    top: 0;
    left: 0;
}
.overlay img {
    width: 100%;
    height: 100%;
}

.projects-wrapper .projects-slick .slick-arrow::after {
    content: "";
    display: block;
    width: 100%;
    height: 100%;
    background-image: url(../img/slider/arrow_nav.png) !important;
    background-size: cover;
    opacity: 1;
}
</style>

<?php
$post_meta = get_post_meta($post->ID);
$args = array(
'post_type' => 'mint_projects',
'posts_per_page' => -1,
);

$project_featured = new WP_Query( $args );
?>

<div class="projects-wrapper">
    <div class="row margin-fix flex-wrap unique-<?php echo uniqid(); ?>">
        <?php $i = 1; ?>
        <?php while ($project_featured->have_posts() ) : $project_featured->the_post(); ?>



        <?php if( $i%2 ): ?>

            <div class="column">
                <div class="overlay-container">
                    <div class="video-wrapper">
                        <div class="project-meta">
                            <div class="client-details_clientHeading">

                                <h6 class="client-details_clientHeading"><?php the_field('project_name'); ?></h6>

                            </div>
                            <div class="client-details_clientDescription">
                                <?php the_field('project_description'); ?>
                            </div>
                            <div class="client-details_clientName"><?php the_field('project_client'); ?></div>
                            <div class="client-details_agency"><?php the_field('project_production'); ?></div>
                            <div class="client-details_production"><?php the_field('project_agency'); ?></div>
                            <div class="client-details_post"><?php the_field('project_post'); ?></div>
                        </div>
                    

                        <?php if( have_rows('project_video') ): ?>
                        
                            <?php while( have_rows('project_video') ): the_row(); ?>

                            <?php 
                            $link = get_sub_field('project_video_link');
                            if( $link ): ?>
                                <iframe class="vimeo" src="<?php echo esc_url( $link ); ?>" frameborder="0" title="<?php the_sub_field('project_name'); ?>"></iframe>
                                <input type="hidden" data-video="<?php echo esc_url( $link ); ?>">
                            <?php endif; ?>            
                            <?php endwhile; ?>
                        
                        <?php endif; ?>

                        <div id="beefeater" class="lazy-background overlay">
                        
                            <?php 
                            $imageBlue = get_field('project_cover_blue');
                            $imageBlue_image = wp_get_attachment_image($imageBlue[ID], 'project', '', array( "class" => "project-cover-before" ));
                            if( !empty( $imageBlue ) ):
                            echo $imageBlue_image;
                                /* <img class="project-cover-before" src="<?php echo esc_url($imageBlue['url']); ?>" alt="<?php echo esc_attr($imageBlue['alt']); ?>"> */
                            endif;

                            $imageOrange = get_field('project_cover_orange');
                            $imageOrange_image = wp_get_attachment_image($imageOrange[ID], 'project', '', array( "class" => "project-cover-after" ));
                            if( !empty( $imageOrange ) ):
                                                        echo $imageOrange_image;
                                /* <img class="project-cover-after" src="<?php echo esc_url($imageOrange['url']); ?>" alt="<?php echo esc_attr($imageOrange['alt']); ?>">*/
                            endif; ?>
                            
                            

                            <a href="#"><span><?php the_field('project_title'); ?></span></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php else: ?>

        <div class="column">
            <div class="overlay-container">
                <div class="video-wrapper">      
                    <div class="project-meta">
                        <div class="client-details_clientHeading">
                            <h6 class="client-details_clientHeading"><?php the_field('project_name'); ?></h6>
                        </div>
                        <div class="client-details_clientDescription">
                            <?php the_field('project_description'); ?>
                        </div>
                        <div class="client-details_clientName"><?php the_field('project_client'); ?></div>
                        <div class="client-details_agency"><?php the_field('project_production'); ?></div>
                        <div class="client-details_production"><?php the_field('project_agency'); ?></div>
                        <div class="client-details_post"><?php the_field('project_post'); ?></div>
                    </div>
                        <?php if( have_rows('project_video') ): ?>
                    
                        <?php while( have_rows('project_video') ): the_row(); ?>

                    <?php 
                    $link = get_sub_field('project_video_link');
                    if( $link ): ?>
                        <iframe class="vimeo" src="<?php echo esc_url( $link ); ?>" frameborder="0" title="<?php the_sub_field('project_name'); ?>"></iframe>
                            <input type="hidden" data-video="<?php echo esc_url( $link ); ?>">
                    <?php endif; ?>
                            
                    <?php endwhile; ?>
                
                    <?php endif; ?>

                    <div class="lazy-background overlay">

                            <?php
                            $imageBlue = get_field('project_cover_blue');
                            $imageBlue_image = wp_get_attachment_image($imageBlue[ID], 'project', '', array( "class" => "project-cover-before" ));
                            if( !empty( $imageBlue ) ):
                                echo $imageBlue_image;
                                /* <img class="project-cover-before" src="<?php echo esc_url($imageBlue['url']); ?>" alt="<?php echo esc_attr($imageBlue['alt']); ?>"> */
                            endif;

                            $imageOrange = get_field('project_cover_orange');
                            $imageOrange_image = wp_get_attachment_image($imageOrange[ID], 'project', '', array( "class" => "project-cover-after" ));
                            if( !empty( $imageOrange ) ):
                                echo $imageOrange_image;
                                /* <img class="project-cover-after" src="<?php echo esc_url($imageOrange['url']); ?>" alt="<?php echo esc_attr($imageOrange['alt']); ?>">*/
                            endif; ?>
                        
                        

                        <a href="#"><?php the_field('project_title'); ?></a>
                    </div>
            
                    </div>
                </div>
            </div>

                        <?php endif; ?>

                        <?php if($i % 2 == 0) echo '</div><div class="row margin-fix flex-wrap unique-'.uniqid().'">'; ?>

                        <?php $i = $i+1; ?>

                        <?php endwhile; wp_reset_query(); ?>

        </div>
    </div>


    <div id="modal_01" class="modal-video modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
	                <div class="slick-prev-custom">
		                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="67" viewBox="0 0 80 67">
			                <image id="Arrow_Nav" width="80" height="67" xlink:href="data:img/png;base64,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"/>
		                </svg>
	                </div>
	                <div class="slick-next-custom">
		                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="67" viewBox="0 0 80 67">
			                <image id="Arrow_Nav" width="80" height="67" xlink:href="data:img/png;base64,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"/>
		                </svg>
	                </div>

                    <div class="projects-slick"></div>
                    <button id="pauseVideo" type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-footer">
                    <a href="#projects" class="modal-footer_back back-to-project">
                        <p>Back to Projects</p>
                    </a>
                    <div class="project-details visible-outside-modal">

                        <a id="openDetails" class="open-button open-button-closed">
                            <p>Project Details</p>
                            <div class="open-img">
	                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
		                            <path id="Path_1" data-name="Path 1" d="M17.5,0A17.5,17.5,0,1,0,35,17.5,17.455,17.455,0,0,0,17.5,0ZM14.9,18.5h-9V16.4h9Zm14.3,0H18.5V29.1H16.4V5.8h2.1V16.4H29.1v2.1Z" fill="#e6e4d9"/>
	                            </svg>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="modal-footer-full">
                    <div class="modal-footer-container">
                        <div class="modal-footer-single">
                            <h6 class="client-details_clientHeading"></h6>
                            <div class="client-details_clientDescription">
                                <p></p>
                            </div>
                        </div>
                        <div class="modal-footer-details">
                            <div class="clients-details">
                                <div class="client-column">
                                    <p class="client-details-color">Client</p>
                                    <p class="client-details_clientName"></p>
                                </div>
                                <div class="client-column">
                                    <p class="client-details-color">Production</p>
                                    <p class="client-details_production"></p>
                                </div>
                            </div>
                            <div class="clients-details">
                                <div class="client-column">
                                    <p class="client-details-color">Agency</p>
                                    <p class="client-details_agency"></p>
                                </div>

                                <div class="client-column">
                                    <p class="client-details-color">Post</p>
                                    <p class="client-details_post"></p>
                                </div>

                            </div>
                        </div>

                        <div class="project-details">
                            <a id="openModalDetails" class="open-button">
                                <div class="open-img">
	                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
		                                <path id="Path_1" data-name="Path 1" d="M17.5,0A17.5,17.5,0,1,0,35,17.5,17.455,17.455,0,0,0,17.5,0ZM14.9,18.5h-9V16.4h9Zm14.3,0H18.5V29.1H16.4V5.8h2.1V16.4H29.1v2.1Z" fill="#e6e4d9"/>
	                                </svg>


                                </div>
                            </a>
                        </div>
	                    <a href="#projects" class="modal-footer_back back-to-project">
		                    <p>Back to Projects</p>
	                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>