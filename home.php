<?php

    session_start();

    if(!isset($_SESSION['username'])) {
        echo "<script> location.href = 'login.php' </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "bootstrap.min.css">
    <title>Home</title>

    <style>
        .abc {
            box-shadow: 0px 0px 10px 0px;
            border-radius: 15px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <br>
    <h1 class = "text-center">Products</h1>
    <br><br>
    
    <div class = "container">
        <div class = "abc">

            <table class = "table table-hover table-striped">

                <thead>

                    <tr>
                        <th scope = 'col' class = 'text-center' colspan = "6"> <h5 class = "fw-bold">ID</h5> </th>
                        <th scope = 'col' class = 'text-center' colspan = "6"> <h5 class = "fw-bold">Product Name</h5> </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td class = 'text-center' colspan = "6"> <p class = "fw-bold fs-5">1</p> </td>
                        <td class = 'text-center' colspan = "6"> <p class = "fw-bold"> <a href = "product/pizza/pizza.php" target = "_blank">Pizza</a> </p> </td>
                    </tr>
                    <tr>
                        <td class = 'text-center' colspan = "6"> <p class = "fw-bold fs-5">2</p> </td>
                        <td class = 'text-center' colspan = "6"> <p class = "fw-bold"> <a href = "product/burger/burger.php" target = "_blank">Burger</a> </p> </td>
                    </tr>
                    <tr>
                        <td class = 'text-center' colspan = "6"> <p class = "fw-bold fs-5">3</p> </td>
                        <td class = 'text-center' colspan = "6"> <p class = "fw-bold"> <a href = "product/Sandwitch/sandwitch.php" target = "_blank">Sandwitch</a> </p> </td>
                    </tr>
                    <tr>
                        <td class = 'text-center' colspan = "6"><p class = "fw-bold fs-5">4</p> </td>
                        <td class = 'text-center' colspan = "6"> <p class = "fw-bold"> <a href = "product/biryani/biryani.php" target = "_blank">Biryani</a> </p> </td>
                    </tr>
                    <tr>
                        <td class = 'text-center' colspan = "6"><p class = "fw-bold fs-5">5</p> </td>
                        <td class = 'text-center' colspan = "6"> <p class = "fw-bold"> <a href = "product/icecream/icecream.php" target = "_blank">Ice Cream</a> </p> </td>
                    </tr>
                    <tr>
                        <td class = 'text-center' colspan = "6"><p class = "fw-bold fs-5">6</p> </td>
                        <td class = 'text-center' colspan = "6"> <p class = "fw-bold"> <a href = "product/drink/drink.php" target = "_blank">Drink</a> </p> </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
    
    <div style = "padding: 50px 0px 50px 150px">

        <a href = '/web/Project/client/cart.php' target = "_blank"><button class = "btn btn-primary p-3">Cart</button></a><br><br>

        <?php
            if(isset($_SESSION['username'])) {
                echo $_SESSION['username'];
            }
        ?>
        <p class = "fw-bold"><a href = "logout.php">Logout</a></p>
    </div>

</body>
</html>