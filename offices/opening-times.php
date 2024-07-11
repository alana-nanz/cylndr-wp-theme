<?php

if( date('w') == 1 ){
     // echo $current_time;
    if ($date1 > $date2 && $date1 < $date3)
    {
        echo '<div class="office-inner">';
    } else {
        echo '<div class="office-inner office-closed">';
    }

} elseif( date('w') == 2 ) {
     // echo $current_time;
    if ($date1 > $date2 && $date1 < $date3)
    {
        echo '<div class="office-inner">';
    } else {
        echo '<div class="office-inner office-closed">';
    }
} elseif( date('w') == 3 ) {
    // echo $current_time;
   if ($date1 > $date2 && $date1 < $date3)
   {
       echo '<div class="office-inner">';
   } else {
       echo '<div class="office-inner office-closed">';
   }
} elseif( date('w') == 4 ) {
    // echo $current_time;
   if ($date1 > $date2 && $date1 < $date3)
   {
       echo '<div class="office-inner">';
   } else {
       echo '<div class="office-inner office-closed">';
   }

} elseif( date('w') == 5 ) {
    // echo $current_time;
   if ($date1 > $date2 && $date1 < $date3)
   {
       echo '<div class="office-inner">';
   } else {
       echo '<div class="office-inner office-closed">';
   }


} else {
    echo '<div class="office-inner office-closed">';

}


?>