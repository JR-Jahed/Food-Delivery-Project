<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "bootstrap.min.css">
    <title>Login</title>

    <style>
        form {
            padding: 15px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px 0px;
        }
    </style>
</head>
<body>
    
    <br><br><br>
    <div class = "container-fluid">
        <div class = "row justify-content-center">
            <div class = "col-lg-4 col-md-6 col-sm-12">
                <form action = "loginAction.php" method = "post">
                    
                    <h1 class = "text-center">Login</h1>

                    <div class = "mb-3">
                        Username:
                        <input type = "text" class = "form-control" name = "username">
                    </div>

                    <div class = "mb-3">
                        Password:
                        <input type = "text" class = "form-control" name = "pass">
                    </div>

                    <div class = "mb-3">
                        <button type = "submit" class = "btn btn-success col-12">Submit</button>
                    </div>

                    <p class = "text-center">Not registered ? <br> <a href = "register.php">Register</a> </p>

                </form>
            </div>
        </div>
    </div>

</body>
</html>