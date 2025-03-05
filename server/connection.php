<?php

    error_reporting(0);

    $server_name    = "localhost";
    $user_name      = "root";
    $password       = "";
    $db_name        = "university_student";

    $conn = mysqli_connect($server_name,$user_name,$password,$db_name);

    if ($conn) {
        // echo "Connection Successully";
    } else {
        echo "Failed Connection".mysqli_connect_error();
    }

?>