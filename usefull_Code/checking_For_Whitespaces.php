<?php

// Checking if the city has a whitespace in the name.                    
    if ( preg_match('/\s/',$city_Name) ){
        // Removing the whitespace in the name.
        $city_Name = str_replace(' ', '-', $city_Name);
        echo $city_Name;
    }


?>