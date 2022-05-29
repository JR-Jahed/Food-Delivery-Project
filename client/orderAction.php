<?php

    include '../config.php';

    session_start();

    $user = $_SESSION['username'];

    $query = "INSERT INTO `orders`(`c_name`) VALUES ('$user')";

    mysqli_query($con, $query);

    if(strpos($user, " ")) {
        $user = str_replace(" ", "_", $user);
    }

    $query = "DELETE FROM `$user` WHERE 1";

    mysqli_query($con, $query);

    echo "<script> location.href = '../home.php' </script>";