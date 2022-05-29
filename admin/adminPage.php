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
    <title>Admin Page</title>

    <style>
        .abc {
            box-shadow: 0px 0px 10px 0px;
            border-radius: 15px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <a href = "addProduct.php"> <button class = "btn btn-primary col-12">Add Product</button> </a>
    <br><br><br>

    <div class = "container">
        <div class = "abc">
            <h1 class = "text-center">Products</h1><br>
            <table class = "table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope = 'col'>ID</th>
                        <th scope = 'col'>Name</th>
                        <th scope = 'col'>Price</th>
                        <th scope = 'col'>Image</th>
                        <th scope = 'col'>Update</th>
                        <th scope = 'col'>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                        include '../config.php';

                        $allData = mysqli_query($con, "SELECT * FROM `crud`");

                        while($row = mysqli_fetch_array($allData)) {
                            echo "<tr>
                                    <td>$row[id]</td>
                                    <td>$row[name]</td>
                                    <td>$row[price]</td>
                                    <td> <img src = '$row[image]' alt = 'Product Image' width = '100px'> </td>
                                    <td> <a class = 'btn btn-warning' href = 'update.php?id=$row[id]'>Update</a> </td>
                                    <td> <a class = 'btn btn-danger' href = 'delete.php?id=$row[id]'>Delete</a> </td>
                                </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div style = "padding: 50px 0px 50px 150px">
        <a href = "../home.php" target = "_blank"> <button class = "btn btn-info p-3">client View</button> </a>
        <a href = "orderReceived.php"> <button class = "btn btn-success p-3">Orders</button> </a><br><br>
        <p class = "fw-bold"><a href = "../logout.php">Logout</a></p>
    </div>
</body>
</html>