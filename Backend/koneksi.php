<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tsunami";

    $konek = mysqli_connect($hostname, $username, $password, $database);
    if(!$konek){
        echo "connection failed";
    }

    
?>