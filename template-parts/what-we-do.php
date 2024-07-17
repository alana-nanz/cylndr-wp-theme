<div class="what-we-do-desktop" style="background: url(<?php echo get_theme_file_uri('/assets/img/services.jpg'); ?>); background-size: cover; background-repeat: no-repeat; background-position: center;">
		<div class="what-we-do-top">
			<h2>OUR <span>SERVICES</span></h2>
			<div class="sub-head">Not all brands and businesses are built the same. We thrive on<br>offering bespoke services that fit the needs of each client.</div>
		</div>
    <div class="what-we-do-inner-bottom">
                <div class="tab-inner-left one">
                    <ul class="links-to-tabs">
                        <li><a class="creative-production active" href="#creative-production">PRODUCTION</a></li>
                        <li><a class="creative-technology" href="#creative-technology">CONTENT CREATION</a></li>
                        <li><a class="global-delivery" href="#global-delivery">DESIGN</a></li>
                        <li><a class="content-strategy" href="#content-strategy">INFLUENCER MARKETING</a></li>
                    </ul>
                </div>
                <div class="tab-inner-right two">
                    <div class="tab-content show" id="creative-production">
                        <?php the_field('creative_production_copy', 'option'); ?>                        
                    </div>
                    <div class="tab-content" id="global-delivery">
                        <?php the_field('global_delivery_copy', 'option'); ?>
                    </div>
                    <div class="tab-content" id="creative-technology">
                        <?php the_field('creative_technology_copy', 'option'); ?>
                    </div>
                    <div class="tab-content" id="content-strategy">
                        <?php the_field('content_strategy_copy', 'option'); ?>
                    </div>
                    <div class="tab-content" id="performance-marketing">
                        <?php the_field('performance_marketing_copy', 'option'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
