

<div id="clock" style="display: none;"></div>
        <div class="container">
            <div class="row no-gutters">
                <div class="col-xs-12 col-md-5">
                    <div class="row no-gutters">
                        <div class="col-xs-12 col-md-6">
                            <a class="btn-show-office" href="#seoul">
                            <div class="office-hours mt6">
                                
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
                            </a>
                        </div>
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
                            <a class="btn-show-office" href="#bucharest">
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
                            <a class="btn-show-office" href="#london">
                                <div class="office-hours">

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
                            <a class="btn-show-office" href="#santiago">
                                <div class="office-hours">
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

                    <!--  -->
                    <div class="col-xs-12 col-md-6">
                            <a class="btn-show-office" href="#auckland">
                            <div class="office-hours mb6">
                                
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
                                        
                                        <span class="clock time" data-timezone="Pacific/Auckland"></span>
                                        
                                    </div>  
                                </div>
                            </a>
                        </div>
                        <!--  -->
                    
                    </div>
                
                </div>
                <div class="col-xs-12 col-md-7">
                    <?php get_template_part( 'offices/loop-office'); ?>
                </div>
            </div>
        </div>
