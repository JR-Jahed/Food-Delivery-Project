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

    $data_fetch_query = "SELECT * FROM `crud` WHERE id = '$id'";
    $record = mysqli_query($con, $data_fetch_query);

    $data = mysqli_fetch_array($record);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "/web/Project/bootstrap.min.css">
    <title>Update</title>

    <style>
        form {
            padding: 15px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px 0px;
        }
    </style>
</head>
<body>

    <a href = "adminPage.php"> <button class = "btn btn-primary col-12">Admin Page</button> </a>
    <br><br>
    
    <div class = "container-fluid">
        <div class = "row justify-content-center">
            <div class = "col-lg-4 col-md-6 col-sm-12">

                <form action = "updateAction.php" method = "post" enctype = "multipart/form-data">

                    <h1 class = "text-center">Update</h1>

                    <div class = "mb-3">
                        Product Name:
                        <input type = "text" class = "form-control" name = "name" value = "<?php echo $data['name'] ?>" required>
                    </div>
                    <div class = "mb-3">
                        Product Price:
                        <input type = "text" class = "form-control" name = "price" value = "<?php echo $data['price'] ?>" required>
                    </div>

                    <div class = "mb-3">
                        <input type = "file" class = "form-control" name = "image" value = "<?php echo $data['image'] ?>" required>
                    </div>

                    <div class = "mb-3">
                        <img src = "<?php echo $data['image'] ?>" alt = "Image" width = "200px">
                    </div>

                    <input type = "hidden" name = "id" value = "<?php echo $data['id'] ?>">

                    <input class = "btn btn-warning col-12" type = "submit" name = "update" value = "Update" id = "">
                </form>
            </div>
        </div>
    </div>

</body>
</html>