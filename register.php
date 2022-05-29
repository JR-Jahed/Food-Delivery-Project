<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "bootstrap.min.css">
    <title>Register</title>

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
                <form action = "insert.php" method = "post">

                    <h1 class = "text-center">Register</h1>

                    <div class = "mb-3">
                        Username:
                        <input type = "text" class = "form-control" name = "username">
                    </div>

                    <div class = "mb-3">
                        Email:
                        <input type = "text" class = "form-control" name = "email">
                    </div>

                    <div class = "mb-3">
                        Mobile:
                        <input type = "text" class = "form-control" name = "mob">
                    </div>

                    <div class = "mb-3">
                        Password:
                        <input type = "text" class = "form-control" name = "pass">
                    </div>

                    <div class = "mb-3">
                        Confirm Password:
                        <input type = "text" class = "form-control" name = "conpass">
                    </div>

                    <div class = "mb-3">
                        <button type = "submit" class = "btn btn-primary hover col-12">Submit</button>
                    </div>

                    <p class = "text-center">Already registered !!!<br> <a href = "login.php">Login</a> </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>