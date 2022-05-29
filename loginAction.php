<?php

    include 'config.php';

    $name = $_POST['username'];
    $pass = $_POST['pass'];

    $result = mysqli_query($con, "SELECT * FROM `register` WHERE username = '$name' and pass = '$pass' ");

    if(mysqli_num_rows($result)) {
        session_start();
        $_SESSION['username'] = $name;

        if($name == "admin") {
            echo "<script> location.href = '/web/Project/admin/adminPage.php' </script>";
            return;
        }

        echo "<script> location.href = 'home.php' </script>";
    }
    else {
        echo "<script> alert('incorrect username and password') </script>";
        echo "<script> location.href = 'login.php' </script>";
    }