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

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    $imageLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $imageDes = "image/".$imageName;

    move_uploaded_file($imageLocation, $imageDes);

    $update_query = "UPDATE `crud` SET `name`='$name',`price`='$price',`image`='$imageDes' WHERE id = '$id'";

    if(mysqli_query($con, $update_query)) {
        echo "<script> alert('updated') </script>";
        echo "<script> location.href = 'adminPage.php' </script>";
    }
    else {
        echo "<script> alert('not updated') </script>";
    }