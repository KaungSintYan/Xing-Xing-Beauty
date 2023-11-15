<?php

    const SERVER_NAME = 'localhost'; 
    const DB_Name = 'xingxing'; 
    const DB_USERNAME = 'root'; 
    const DB_PASSWORD = ''; 

    $connection = mysqli_connect(SERVER_NAME,DB_USERNAME,DB_PASSWORD,DB_Name); 
    if(!$connection){
        echo mysqli_connect_error(); 
    }
?>