<?php

    $server = "localhost";
    $user = "root";
    $pw = "admin";
    $db = "mydb";

    $conn = mysqli_connect($server, $user, $pw, $db);

    if(!$conn) {
        echo "Connection failed!";        
    }
