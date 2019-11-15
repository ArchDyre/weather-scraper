<?php

$file_Headers = @get_headers("url");

if($file_Headers[0] == 'HTTP/1.1 404 Not Found'){
    
    $exists = false;

}else{
    
    $exists = true;
    
}



?>