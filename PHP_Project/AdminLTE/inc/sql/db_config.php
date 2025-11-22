<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "php-project1";

    // $home_url = "/index.php"; #root "http://localhost/index.php"
    // $home_url = "/1293874/PWAD_PHP/PHP_Project/AdminLTE/index.php"; #perfect but don't work if folder name changed
    $home_url = "/php-project1/PWAD_PHP1/PHP_Project/AdminLTE/"; #perfect but don't work if folder name changed
    

    


    
 
    




    mysqli_report(MYSQLI_REPORT_OFF); 
    
    $db = new mysqli($host, $user, $password, $database);

    if($db->connect_error){
        die("Connection Fail ". $db->connect_error); 
    }
    else{
        // echo "<br>Connection Successful<br>";
    }



?>