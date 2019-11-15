<?php

     // Set $url == website + city name (determined by website url format)     
     $url = 'http://completewebdevelopercourse.com/locations/'.$city_Name;
     
     // Set $content == All the content from the $url
     $content = file_get_contents($url);
     
     // $first_Step == starting div/p/list of the content you want to extract.
     $first_Step = explode( '<p class="summary">' , $content );\
     // $second_Step == ending div/p/list of the content you want to extract.
     $second_Step = explode("</p>" , $first_step[1] );

     // $second_Step [0] == The extracted content from the website.

?>