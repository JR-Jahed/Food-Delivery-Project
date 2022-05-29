<?php

    $name = $_POST['username'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $pass = $_POST['pass'];
    $conpass = $_POST['conpass'];

    $name_pattern = "/^[a-zA-Z. ]+$/";
    $email_pattern = "/^[a-z]+[0-9]*@[a-z]+.com$/";
    $mob_pattern = "/^(\+88)?-?01[3-9]\d{8}$/";
    $pass_pattern = "/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$])).{6,20}$/";

    if(!preg_match($name_pattern, $name)) {
        echo "<script> alert('Enter a correct username !!') </script>";
        echo "<script> location.href = 'register.php' </script>";
        return;
    }
    if(!preg_match($email_pattern, $email)) {
        echo "<script> alert('Enter a correct email !!') </script>";
        echo "<script> location.href = 'register.php' </script>";
        return;
    }
    if(!preg_match($mob_pattern, $mob)) {
        echo "<script> alert('Enter a valid mobile number') </script>";
        echo "<script> location.href = 'register.php' </script>";
        return;
    }
    if(!preg_match($pass_pattern, $pass)) {
        echo "<script> alert('Enter a valid password') </script>";
        echo "<script> location.href = 'register.php' </script>";
        return;
    }
    if($pass != $conpass) {
        echo "<script> alert('password is not matching') </script>";
        echo "<script> location.href = 'register.php' </script>";
        return;
    }

    include 'config.php';

    $insert_query = "INSERT INTO `register`(`username`, `email`, `mobile`, `pass`) VALUES ('$name','$email','$mob','$pass')";

    if(mysqli_query($con, $insert_query)) {
        echo "<script> alert('Registered') </script>";
        echo "<script> location.href = 'login.php' </script>";
    }
    else {
        die("not inserted");
        echo "<script> location.href = 'register.php' </script>";
    }