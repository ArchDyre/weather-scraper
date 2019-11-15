<?php

$url = 'http://completewebdevelopercourse.com/locations/'.$city_Name;
    $content = file_get_contents($url);
    $first_step = explode( '<div class="summary">' , $content );
    $second_step = explode("</div>" , $first_step[1] );

     echo $second_step[0];


?>