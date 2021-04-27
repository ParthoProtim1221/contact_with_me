<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In As Admin</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="logInStyle.css">
    <script src="./scripts/jquery.min.js"></script>

</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h2><em>Sign in to your account</em></h2>

            <form action="information.php" method="POST">
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="Login ID" required>
                <input type="password" id="password" class="fadeIn third" name="pass" placeholder="password" required>
                <input type="submit" name="done" class="fadeIn fourth" value="Log In"> <br>
                                
            </form>

            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>
</body>

</html>