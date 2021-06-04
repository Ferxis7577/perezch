<?php
    define ('DB_SERVER','127.0.0.1');
    define ('DB_USERNAME','root');
    define ('DB_PASS','');
    define('DB_NAME','perezcha');

    $link= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASS,DB_NAME);
    if($link === false){
        die("ERROR EN LA CONEXION" . mysqli_connect.error());
    }
    else{
    }
 
?>