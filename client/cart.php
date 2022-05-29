<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../bootstrap.min.css">
    <title>Cart</title>
</head>
<body>
    <div>
        <a href = "/web/Project/home.php"><button class = "btn btn-primary col-12">Home</button></a>
    </div>
    <br><br>
    
    <div class = "container">
        <table class = "table table-dark table-hover">
            <thead>
                <tr>
                    <th scope = 'col'>Name</th>
                    <th scope = 'col'>Image</th>
                    <th scope = 'col'>Price</th>
                    <th scope = 'col'>Remove</th>
                </tr>
            </thead>

            <tbody>
                <?php

                    include '../config.php';

                    session_start();

                    $user = $_SESSION['username'];

                    if(strpos($user, " ")) {
                        $user = str_replace(" ", "_", $user);
                    }

                    $total_price = 0;

                    $selected_products = mysqli_query($con, "SELECT * FROM $user");

                    while($row = mysqli_fetch_assoc($selected_products)) {

                        $name_p = $row['p_name'];

                        $allData = mysqli_query($con, "SELECT * FROM `crud` WHERE name = '$name_p'");

                        while($x = mysqli_fetch_array($allData)) {

                            $total_price += $x['price'];
                            echo "<tr>
                                    <td>$x[name]</td>
                                    <td> <img src = '/web/Project/admin/$x[image]' alt = 'Product Image' width = '100px'> </td>
                                    <td>$x[price]</td>
                                    <td> <a class = 'btn btn-danger' href = 'removeAction.php?id=$x[name]'>Remove</a> </td>
                                </tr>";
                        }
                    }

                    echo "<h3 class = 'text-center'>Total Price: $total_price</h3><br>";
                ?>
            </tbody>
        </table>
    </div>
    <br>

    <div class = "container">
        <a href = 'orderAction.php'><button class = "btn btn-success btn-lg">Order</button></a>
     </div>

     <br><br><br><br>

</body>
</html>