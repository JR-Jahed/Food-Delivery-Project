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

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    print_r($image);

    $imageLocation = $_FILES['image']['tmp_name'];
    $imageName = $_FILES['image']['name'];
    $imageDes = "image/".$imageName;

    move_uploaded_file($imageLocation, $imageDes);

    $insert_query = "INSERT INTO `crud`(`name`, `price`, `image`) VALUES ('$name','$price','$imageDes')";

    if(mysqli_query($con, $insert_query)) {
        echo "<script> location.href = 'adminPage.php' </script>";
    }