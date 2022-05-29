<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "/web/Project/bootstrap.min.css">
    <title>Burger</title>
</head>
<body>

    <div>
        <a href = "/web/Project/home.php"><button class = "btn btn-primary col-12">Home</button></a>
    </div>

    <div class = "container">
        <br><h1 class = "text-center">Chicken Burger</h1><br>
        <div class = "row justify-content-center">
            <div class = "col-lg-4 col-md-6">
                <img class = "img-fluid img-thumbnail" src = "chicken burger.jpg" alt = "Chicken Burger">
                <h5 class = "text-center">Price: 60</h5>
                <?php
                    $i = "chicken burger";
                    echo "<a class = 'btn btn-danger d-block' href = '/web/Project/client/addtocartAction.php? id=$i'>Add to Cart</a>";
                ?>
            </div>
        </div>
    </div>

    <br><br>
    <div class = "container">
        <br><h1 class = "text-center">Beef Burger</h1><br>
        <div class = "row justify-content-center">
            <div class = "col-lg-4 col-md-6">
                <img class = "img-fluid img-thumbnail" src = "beef burger.jpg" alt = "Beef Burger">
                <h5 class = "text-center">Price: 70</h5>
                <?php
                    $i = "beef burger";
                    echo "<a class = 'btn btn-danger d-block' href = '/web/Project/client/addtocartAction.php? id=$i'>Add to Cart</a>";
                ?>
            </div>
        </div>
    </div>

    <div style = "padding: 50px 0px 50px 150px">
        <?php
            if(isset($_SESSION['username'])) {
                echo $_SESSION['username'];
            }
        ?>
        <p class = "fw-bold"><a href = "logout.php">Logout</a></p>
    </div>
</body>
</html>