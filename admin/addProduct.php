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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "/web/Project/bootstrap.min.css">
    <title>Add</title>

    <style>
        form {
            box-shadow: 0px 0px 10px 0px;
            border-radius: 15px;
            padding: 20px;
        }
    </style>

</head>
<body>

    <a href = "adminPage.php"> <button class = "btn btn-primary col-12">Admin Page</button> </a>
    <br><br>

    <div class = "container-fluid">
        <div class = "row justify-content-center">
            <div class = "col-lg-4 col-md-6 col-sm-12">

                <form action = "insert.php" method = "post" enctype = "multipart/form-data">

                    <h1 class = "text-center">Add Product</h1>

                    <div class = "mb-3">
                        Product Name:
                        <input type = "text" class = "form-control" name = "name">
                    </div>
                    <div class = "mb-3">
                        Product Price:
                        <input type = "text" class = "form-control" name = "price">
                    </div>

                    <div class = "mb-3">
                        <input type = "file" class = "form-control" name = "image">
                    </div>

                    <button type = "submit" class = "btn btn-primary col-12">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <br><br>

    <div style = "padding: 20px 0px 20px 150px">
        <p class = "fw-bold"><a href = "../logout.php">Logout</a></p>
    </div>
</body>
</html>