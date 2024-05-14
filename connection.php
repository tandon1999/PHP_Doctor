<?php

    // $database= new mysqli("localhost","root","","edoc");
    $database= new mysqli("localhost","praveen.m","FJYWWJDU","praveenmanandhar_");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
