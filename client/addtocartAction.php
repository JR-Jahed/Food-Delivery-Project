<?php

    include '../config.php';

    $id = $_GET['id'];

    session_start();

    $user = $_SESSION['username'];

    if(strpos($user, " ")) {
        $user = str_replace(" ", "_", $user);
    }

    $res = mysqli_query($con, "SHOW TABLES LIKE '$user'");

    if(mysqli_num_rows($res) == 0) {
        $query = "CREATE TABLE $user(p_name VARCHAR(20))";

        mysqli_query($con, $query);
    }

    $query = "INSERT INTO `$user`(`p_name`) VALUES ('$id')";

    mysqli_query($con, $query);

    echo "<script> location.href = 'cart.php' </script>";