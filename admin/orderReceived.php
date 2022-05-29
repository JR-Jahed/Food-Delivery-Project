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
    <link rel = "stylesheet" href = "../bootstrap.min.css">
    <title>Received Orders</title>
</head>
<body>
    <div>
        <a href = "adminPage.php"><button class = "btn btn-primary col-12">Home</button></a>
    </div>

    <br><br>
    
    <div class = "container">
        <table class = "table table-dark table-hover">
            <thead>
                <tr>
                    <th scope = 'col'>Customer Name</th>
                    <th scope = 'col'>Deliver</th>
                </tr>
            </thead>

            <tbody>
                <?php

                    include '../config.php';

                    $c_names = mysqli_query($con, "SELECT * FROM `orders`");

                    while($row = mysqli_fetch_assoc($c_names)) {

                        echo "<tr>
                                <td>$row[c_name]</td>
                                <td> <a class = 'btn btn-success' href = 'orderProcess.php?id=$row[c_name]'>Deliver</a></td>
                              </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>