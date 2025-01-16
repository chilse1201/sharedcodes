<?php
    $server="localhost";
    $uname="root";
    $pass="";
    $db_name= "dbdelpitrack";

    $conn=mysqli_connect($server,$uname,$pass,$db_name);

    if (!$conn){
        echo "Connection Failed.";    
    }
    ?>
