<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        echo "<script> alert('login first to access admin page) </script>";
        echo "<script> location.href = '/web/Project/login.php' </script>";
        return;
    }
    else {
        if($_SESSION['username'] != "admin") {
            echo "<script> alert('You are not allowed to view this page') </script>";
            echo "<script> location.href = '/web/Project/home.php' </script>";
            return;
        }
    }

    include '../config.php';

    $user = $_GET['id'];

    $query = "DELETE FROM `orders` WHERE c_name = '$user'";

    mysqli_query($con, $query);

    if(strpos($user, " ")) {
        $user = str_replace(" ", "_", $user);
    }

    $query = "DROP TABLE $user";

    mysqli_query($con, $query);

    echo "<script> location.href = 'orderReceived.php' </script>";