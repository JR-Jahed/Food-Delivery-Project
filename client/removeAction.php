<?php

    include '../config.php';

    session_start();

    $user = $_SESSION['username'];

    if(strpos($user, " ")) {
        $user = str_replace(" ", "_", $user);
    }

    $id = $_GET['id'];

    $query = "DELETE FROM `$user` WHERE p_name = '$id'";

    mysqli_query($con, $query);

    echo "<script> location.href = 'cart.php' </script>";