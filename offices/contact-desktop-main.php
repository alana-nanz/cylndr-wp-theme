

<div id="clock" style="display: none;"></div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xs-12 col-md-5">
                    <div class="row no-gutters">

                        <div class="col-xs-12 col-md-6">
                            <a class="btn-show-office" href="#durham">
                                <div class="office-hours mt6">
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

                                        <?php

                                        date_default_timezone_set("America/New_York");
                                        $tz_time = date("F j, Y h:i");

                                        ?>


                                   
                                
                                        <h3>Durham</h3>
                                        <span class="clock time" data-timezone="America/New_York"></span>
                                    </div>  
                                </div>
                            </a>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <a class="btn-show-office" href="#new-york">
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
                            </a>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <a class="btn-show-office" href="#dallas">
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
                            </a>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <a class="btn-show-office" href="#los-angeles">
                                <div class="office-hours">
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
                                        <span class="clock time" data-timezone="America/Los_Angeles"></span>
                                    </div>  
                                </div>
                            </a>
                        </div>

												<div class="col-xs-12 col-md-6">
                            <a class="btn-show-office" href="#phoenix">
                                <div class="office-hours">
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
                                    
                                        <h3>Phoenix</h3>
                                        <span class="clock time" data-timezone="America/Los_Angeles"></span>
                                    </div>  
                                </div>
                            </a>
                        </div>

                    <!--  -->

                        <!--  -->
                    
                    </div>
                
                </div>
                <div class="col-xs-12 col-md-7">
                    <?php get_template_part( 'offices/loop-office'); ?>
                </div>
            </div>
        </div>
