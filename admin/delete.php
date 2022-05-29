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

    $id = $_GET['id'];

    $delete_query = "DELETE FROM `crud` WHERE id = '$id'";

    mysqli_query($con, $delete_query);
    header('location:adminPage.php');