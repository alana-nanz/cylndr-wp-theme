<a class="close-contact"><img src="<?php echo get_theme_file_uri()?>/assets/img/Menu_Icons_CLOSE.svg" alt="cylndr"></a> 
<div class="accordion" id="accordionExample">

<!-- Seoul -->
<div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne"      aria-expanded="true" aria-controls="collapseOne">
            <div class="office-hours">
                <?php     
                    date_default_timezone_set("Asia/Seoul");
                    date("H:i");

                    $open = "OPEN";
                    $closed = "CLOSED";
                    $date1 = date("H:i");
                    $date2 = "09:00";
                    $date3 = "17:00";

                    // echo $current_time;
                    if ($date1 > $date2 && $date1 < $date3)
                    {
                        echo '<div class="office-inner">';
                    } else {
                        echo '<div class="office-inner office-closed">';
                    }
                ?>
                
                <h3>Seoul</h3>
                <span class="clock time" data-timezone="Asia/Seoul"></span>
            </div>  
                </div>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
            <?php get_template_part( 'offices/seoul'); ?>
      </div>
    </div>
  </div>

  <!-- Bucharest -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <div class="office-hours ">
                <?php     
                    date_default_timezone_set("Europe/Bucharest");
                    date("H:i");

                    $open = "OPEN";
                    $closed = "CLOSED";
                    $date1 = date("H:i");
                    $date2 = "09:00";
                    $date3 = "17:00";

                    // echo $current_time;
                    if ($date1 > $date2 && $date1 < $date3)
                    {
                        echo ' <div class="office-inner">';
                    } else {
                        echo '<div class="office-inner office-closed">';
                    }
                ?>
                <h3>Bucharest</h3>
                <span class="clock time" data-timezone="Europe/Bucharest"></span>
            </div>  
                </div>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      <?php get_template_part( 'offices/bucharest'); ?>
      </div>
    </div>
  </div>

  <!-- London -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left  collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <div class="office-hours ">
                <?php     
                    date_default_timezone_set("Europe/London");
                    date("H:i");

                    $open = "OPEN";
                    $closed = "CLOSED";
                    $date1 = date("H:i");
                    $date2 = "09:00";
                    $date3 = "17:00";

                    // echo $current_time;
                    if ($date1 > $date2 && $date1 < $date3)
                    {
                        echo '<div class="office-inner">';
                    } else {
                        echo '<div class="office-inner office-closed">';
                    }
                ?>
                <h3>London</h3>
                <span class="clock time" data-timezone="Europe/London"></span>
            </div> 
                </div>
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
         <?php get_template_part( 'offices/london'); ?>
      </div>
    </div>
  </div>

    <!-- Santiago -->
    <div class="card">
        <div class="card-header" id="headingFour">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <div class="office-hours ">
                        <?php     
                            date_default_timezone_set("America/Santiago");
                            date("H:i");

                            $open = "OPEN";
                            $closed = "CLOSED";
                            $date1 = date("H:i");
                            $date2 = "09:00";
                            $date3 = "17:00";

                            // echo $current_time;
                            if ($date1 > $date2 && $date1 < $date3)
                            {
                                echo '<div class="office-inner">';
                            } else {
                                echo '<div class="office-inner office-closed">';
                            }
                        ?>
                        <h3>Santiago</h3>
                        <span class="clock time" data-timezone="America/Santiago"></span>
                    </div>
                        </div>
                </button>
            </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body">
                <?php get_template_part( 'offices/santiago'); ?>
            </div>
        </div>

    </div>


    <!-- Durham -->
    <div class="card">
        <div class="card-header" id="headingFive">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <div class="office-hours">
                        <?php     
                            date_default_timezone_set("America/New_York");
                            date("H:i");

                            $open = "OPEN";
                            $closed = "CLOSED";
                            $date1 = date("H:i");
                            $date2 = "09:00";
                            $date3 = "17:00";

                            
                            if ($date1 > $date2 && $date1 < $date3)
                            {
                                echo '<div class="office-inner">';
                            } else {
                                echo '<div class="office-inner office-closed">';
                            }
                        ?>
                                
                        <h3>Durham</h3>
                        <span class="clock time" data-timezone="America/New_York"></span>
                    </div>  
                        </div>
                </button>
            </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
                <?php get_template_part( 'offices/durham'); ?>
            </div>
        </div>
    </div>

    <!-- New York -->
    <div class="card">
        <div class="card-header" id="headingSix">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <div class="office-hours ">
                        <?php     
                            date_default_timezone_set("America/New_York");
                            date("H:i");

                            $open = "OPEN";
                            $closed = "CLOSED";
                            $date1 = date("H:i");
                            $date2 = "09:00";
                            $date3 = "17:00";

                            // echo $current_time;
                            if ($date1 > $date2 && $date1 < $date3)
                            {
                                echo '<div class="office-inner">';
                            } else {
                                echo '<div class="office-inner office-closed">';
                            }
                        ?>
                                
                            <h3>New York</h3>
                            <span class="clock time" data-timezone="America/New_York"></span>
                        </div>  
                    </div>
                </button>
            </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">
                <?php get_template_part( 'offices/new-york'); ?>
            </div>
        </div>
    </div>


     <!-- Dallas -->
     <div class="card">
        <div class="card-header" id="headingSeven">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <div class="office-hours ">
                        <?php     
                            date_default_timezone_set("America/Chicago");
                            date("H:i");

                            $open = "OPEN";
                            $closed = "CLOSED";
                            $date1 = date("H:i");
                            $date2 = "09:00";
                            $date3 = "17:00";

                            // echo $current_time;
                            if ($date1 > $date2 && $date1 < $date3)
                            {
                                echo ' <div class="office-inner">';
                            } else {
                                echo ' <div class="office-inner office-closed">';
                            }
                        ?>
                        
                                <h3>Dallas</h3>
                                <span class="clock time" data-timezone="America/Chicago"></span>
                            </div>  
                        </div>
                </button>
            </h2>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body">
                <?php get_template_part( 'offices/dallas'); ?>
            </div>
        </div>
    </div>



     <!-- Los Angeles -->
     <div class="card">
        <div class="card-header" id="headingEight">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                <div class="office-hours ">
                                <?php     
                                    date_default_timezone_set("America/Los_Angeles");
                                    date("H:i");

                                    $open = "OPEN";
                                    $closed = "CLOSED";
                                    $date1 = date("H:i");
                                    $date2 = "09:00";
                                    $date3 = "17:00";

                                    // echo $current_time;
                                    if ($date1 > $date2 && $date1 < $date3)
                                    {
                                        echo '<div class="office-inner">';
                                    } else {
                                        echo '<div class="office-inner office-closed">';
                                    }
                                ?>
                                    
                                        <h3>Los Angeles</h3>
                                        <span id="losAngeles-m" class="time">
                                        <?php echo $date1 ?>
                                        </span>
                                    </div>  
                                </div>
                </button>
            </h2>
        </div>
        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
            <div class="card-body">
                <?php get_template_part( 'offices/los-angeles'); ?>
            </div>
        </div>
    </div>

     <!-- Auckland -->
     <div class="card">
        <div class="card-header" id="headingNine">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                <div class="office-hours ">
                                <?php     
                                    date_default_timezone_set("Pacific/Auckland");
                                    date("H:i");

                                    $open = "OPEN";
                                    $closed = "CLOSED";
                                    $date1 = date("H:i");
                                    $date2 = "08:30";
                                    $date3 = "17:00";

                                    // echo $current_time;
                                    if ($date1 > $date2 && $date1 < $date3)
                                    {
                                        echo '<div class="office-inner">';
                                    } else {
                                        echo '<div class="office-inner office-closed">';
                                    }
                                ?>
                                    
                                        <h3>Auckland</h3>
                                        <span class="time">
                                        <?php echo $date1 ?>
                                        </span>
                                    </div>  
                                </div>
                </button>
            </h2>
        </div>
        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
            <div class="card-body">
                <?php get_template_part( 'offices/auckland'); ?>
            </div>
        </div>
    </div>


</div>