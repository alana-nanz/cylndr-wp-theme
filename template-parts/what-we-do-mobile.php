<div class="what-we-do-mobile" style="background: url(<?php echo get_theme_file_uri('/assets/img/services.jpg'); ?>); background-size: cover; background-repeat: no-repeat; background-position: center;">
       
  <div class="what-we-do-top">
		<h2>OUR <span>SERVICES</span></h2>
		<!-- <div class="sub-head">Not all brands and businesses are built the same. We thrive on offering bespoke services that fit the needs of each client.</div> -->
	</div>

  <div class="what-we-do-inner-bottom-mobile">

      <button type="button" id="exampleModal-1-btn" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-1">
       PRODUCTION 
      </button>

      <!-- Modal -->
      <div class="modal modal-bottom" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">PRODUCTION</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php the_field('creative_production_copy', 'option'); ?>   
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>


    <!-- Button trigger modal -->
      <button type="button" id="exampleModal-2-btn" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-2">
        CONTENT CREATION 
      </button>

      <!-- Modal -->
      <div class="modal modal-bottom" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">CONTENT CREATION</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php the_field('creative_technology_copy', 'option'); ?>
            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
      </div>



      <!-- Button trigger modal -->
    <button type="button" id="exampleModal-3-btn" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-3">
    DESIGN
    </button>

    <!-- Modal -->
    <div class="modal modal-bottom" id="exampleModal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">DESIGN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php the_field('global_delivery_copy', 'option'); ?>
          </div>
          <div class="modal-footer"> 
          </div>
        </div>
      </div>
    </div>


      <!-- Button trigger modal -->
      <button type="button" id="exampleModal-4-btn" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-4">
      INFLUENCER MARKETING
      </button>

    <!-- Modal -->
    <div class="modal modal-bottom" id="exampleModal-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">INFLUENCER MARKETING</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php the_field('content_strategy_copy', 'option'); ?>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

  </div>


