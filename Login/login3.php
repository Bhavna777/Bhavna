<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family-Login</title>
    <link rel="stylesheet" href="../LoginCss/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class = "main">
        <div class = "Inner">
            <div>
                <h1 class = "text-center pt-5">Enter your full name to Login</h1>
                <?php
                $error= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if (strpos($error, "Login=error")== true){
                    echo"<p class= 'text-center'> Sorry Unauthorized person cann't Login</p>";
                }
                ?>
                <div class = "Form text-center pt-5">
                    <form action="../Validation/validation3.php"  method="POST">
                        <h1 class = "text-success">Login Here</h1><br>
                        <input type="text" placeholder = "name" name="name" class = "text-center"><br>
                        <button class = "btn btn-success mt-4">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>