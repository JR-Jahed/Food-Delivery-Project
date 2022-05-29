<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "/web/Project/bootstrap.min.css">
    <title>Drink</title>
</head>
<body>

    <div>
        <a href = "/web/Project/home.php"><button class = "btn btn-primary col-12">Home</button></a>
    </div>

    <div class = "container">
        <br><h1 class = "text-center">Coca cola</h1><br>
        <div class = "row justify-content-center">
            <div class = "col-lg-4 col-md-6">
                <img class = "img-fluid img-thumbnail" src = "cocacola.jpg" alt = "Coca cola">
                <h5 class = "text-center">Price: 60</h5>
                <?php
                    $i = "cocacola";
                    echo "<a class = 'btn btn-danger d-block' href = '/web/Project/client/addtocartAction.php? id=$i'>Add to Cart</a>";
                ?>
            </div>
        </div>
    </div>

    <div class = "container">
        <br><h1 class = "text-center">Pepsi</h1><br>
        <div class = "row justify-content-center">
            <div class = "col-lg-4 col-md-6">
                <img class = "img-fluid img-thumbnail" src = "pepsi.jpg" alt = "Pepsi">
                <h5 class = "text-center">Price: 60</h5>
                <?php
                    $i = "pepsi";
                    echo "<a class = 'btn btn-danger d-block' href = '/web/Project/client/addtocartAction.php? id=$i'>Add to Cart</a>";
                ?>
            </div>
        </div>
    </div>

    <div class = "container">
        <br><h1 class = "text-center">7up</h1><br>
        <div class = "row justify-content-center">
            <div class = "col-lg-4 col-md-6">
                <img class = "img-fluid img-thumbnail" src = "7up.png" alt = "7up">
                <h5 class = "text-center">Price: 60</h5>
                <?php
                    $i = "7up";
                    echo "<a class = 'btn btn-danger d-block' href = '/web/Project/client/addtocartAction.php? id=$i'>Add to Cart</a>";
                ?>
            </div>
        </div>
    </div>

    <div class = "container">
        <br><h1 class = "text-center">Sprite</h1><br>
        <div class = "row justify-content-center">
            <div class = "col-lg-4 col-md-6">
                <img class = "img-fluid img-thumbnail" src = "Sprite.jpg" alt = "Sprite">
                <h5 class = "text-center">Price: 60</h5>
                <?php
                    $i = "sprite";
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