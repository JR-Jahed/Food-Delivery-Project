<?php

    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "web";

    $con = mysqli_connect($serverName, $username, $password, $dbName);

    if(!$con) {
        die("connection failed ".mysqli_connect_error());
    }