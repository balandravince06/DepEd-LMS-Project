<?php

    date_default_timezone_set("Asia/Manila");

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "puj_db";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Cannot connect to the internet. Error: ".mysqli_connect_error());
    }else{
    	echo "Kumonek";
    }

?>