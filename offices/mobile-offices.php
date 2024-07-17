<a class="close-contact"><img src="<?php echo get_theme_file_uri()?>/assets/img/star-icon.png" alt="cylndr"></a> 
<div class="accordion" id="accordionExample">
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

     <!-- Phoenix -->
     <div class="card">
        <div class="card-header" id="headingNine">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
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
                        
                                <h3>Phoenix</h3>
                                <span class="clock time" data-timezone="America/Phoenix"></span>
                            </div>  
                        </div>
                </button>
            </h2>
        </div>
        <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
            <div class="card-body">
                <?php get_template_part( 'offices/phoenix'); ?>
            </div>
        </div>
    </div>


</div>
