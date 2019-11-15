<?php


/* OLD METHOD
            // Retreving the summary from the weather website.
            $city_Name = $_POST['input_City_Name'];

            // The original city name that was entered. (Used in error handling)
            $original_City_Name_Entered = $city_Name;
             
             
             
            // Checking if the city has a whitespace in the name.                    
            if ( preg_match('/\s/',$city_Name) ){
                // Removing the whitespace in the name.
                $city_Name = str_replace(' ', '_', $city_Name);

            }

            // Set $url == website + city name (determined by website url format)     
            $url = 'http://completewebdevelopercourse.com/locations/'.$city_Name;

            $file_Headers = $get_headers($url);

            if($file_Headers[0] == 'HTTP/1.1 404 Not Found'){

            $error_Message = "It appears out server are down... <p>Please try again later.</p>";
            $error_Message = "<div class='alert alert-danger text-center'>".$error_Message."</div>";


            }else{

            // Set $content == All the content from the $url
            $content = file_get_contents($url);

            // $first_Step == starting div/p/list of the content you want to extract.
            $first_Step = explode( '<p class="summary">' , $content );

            if(sizeof($first_Step) > 1){

             // $second_Step == ending div/p/list of the content you want to extract.
             $second_Step = explode("</p>" , $first_Step[1] );

             $success_Message = $second_Step [0];
             $success_Message = str_replace(':', ':<br>', $success_Message);


             $success_Message = "<div class='alert alert-success text-center'>".$success_Message."</div>";

            }else{

             $error_Message = "The city (<strong>".$original_City_Name_Entered."</strong>) could not be found.";
            $error_Message = "<div class='alert alert-danger text-center'>".$error_Message."</div>";

            }


            }
            END OF: OLD METHOD */







?>