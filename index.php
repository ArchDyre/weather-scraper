<?php

$displayMessage = "";
$weather_Array = "";

 if(isset($_POST['submitBtn'])){
     if(!isset($_POST['input_City_Name']) || $_POST['input_City_Name'] == ""){
         
         $displayMessage = "<div class='alert alert-danger text-center'> Please enter a City name to continue... </div>";
         
     }else{
         
         if($displayMessage == ""){
         
            // NEW METHOD 
             
            // Retreving the summary from the weather website.
            $city_Name = $_POST['input_City_Name'];

            // The original city name that was entered. (Used in error handling)
            $original_City_Name_Entered = $city_Name;
             
             
            /* 
            // Checking if the city has a whitespace in the name.                    
            if ( preg_match('/\s/',$city_Name) ){
                // Removing the whitespace in the name.
                $city_Name = str_replace(' ', '_', $city_Name);

            }
            */ 
             // $url_Contents = 
            $url_Contents = @file_get_contents("https://api.openweathermap.org/data/2.5/weather?q={$original_City_Name_Entered}&units=metric&APPID=15fd3ee2fefc70e2100efbf9b70e3493");
            //$url_Contents = file_get_contents("https://jsonplaceholder.typicode.com/todos/1");
            
             if($url_Contents === false){
                 
                 $displayMessage = "<div class='alert alert-danger text-center'> Please enter a valid City name to continue... </div>";
                 
             }else{
                 
                 // assaign JSON data
                $weather_Array = json_decode($url_Contents,true);
                 
                $displayMessage = "<div class='alert alert-success text-center'>".$city_Name." currently has <strong>".
                    $weather_Array['weather'][0]["description"]."</strong> with a <strong>Minimum Temperature of ".ceil($weather_Array['main']['temp_min']).
                    "&deg; </strong> and a <strong>Maximum Temperature of ".ceil($weather_Array['main']['temp_max'])."&deg;</strong </div>";
                 
             }
             
            

        }
         
     }
     
 }

 




/* CALL FROM:

http://weather.news24.com/sa/


http://completewebdevelopercourse.com/locations/London


*/

?>


<!doctype html>
<html lang="en">
  <head>
    
    <!-- Link to css normalising sheet. -->
    <link rel="stylesheet" type="text/css" href="css/normalise.css">
    <!-- Link to css sheet -->
    <link rel="stylesheet" type="text/css" href="css/weather_Scraper.css">
        
    <!-- IE 8 and below compatibility with HTML5 -->
    
    <!--[if IE]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
        </script>
    <![endif]-->  
    
    <!-- Declare description of website -->
    <meta name="description" content="">
    <!-- Declare author of website. -->
    <meta name="author" content="Rohan Dyre">
    <!-- Declare keywords relating to SEO of website content -->
    <meta name="keywords" content="">
    <!-- Declare every how many seconds the page should refresh content. -->
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    
    <!-- Change the title of the website -->
    <title>Weather Scraper</title>
  </head>
  
  
  <body>
      <div class="container h-100" >
        <div class="row h-100">
           <div class="col-3"></div>  
           <div class="col-12 col-lg-6 my-auto" id="main_Form_Div">
                <form method="post">
                    <div class="form-group centered text-center text-light">   
                        <div class="h1 font-weight-bold">What's the weather?</div>
                    </div>
                    
                    <div class="form-group text-center">
                        <label for="input_City_Name" id="city_Label" class="text-light">Enter the name of a city.</label>
                        <input id="input_City_Name" name="input_City_Name" class="form-control text-center" type="text" placeholder="Cape Town">
                    </div>
                    
                    <div class="form-group centered text-center">
                        <input id="submitBtn" name="submitBtn" type="submit" value="Search" class="btn btn-primary text-centered">
                    </div>
                    
                    <!-- Div used to display weather information. -->
                    <?php
                        echo $displayMessage;
                    ?>
                    
                </form>   
                
                
                
           </div> <!-- END OF: col-sm #Primary -->
           <div class="col-3"></div>  
        </div>  <!-- END OF: .row -->
      </div> <!-- END OF: .container -->
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script type="text/javascript">

      
    </script>
    
  </body>
  
</html>