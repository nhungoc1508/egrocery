<!DOCTYPE html>
<html lang="en">

<?php
include("new_navbar.php");
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- This line of code allows for a user to automatically download Bootstrap CSS files onto their browser via a CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <!-- Customized CSS for all pages -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/register.css">
    <style media="screen">
        <?php
        if ($_GET['error']) {
            print ".error{
       text-align: center;
       font-size: 14px;
       font-weight: bolder;
       position: absolute;
       left: 50%;
       top: 10%;
       transform: translate(-50%,-20%);
       color: red;
       background-color: pink;
       border: none;
       width: 230px;
       padding: 4px;
       opacity: 0.85;

       outline: none;
     }";
        }
        ?>
    </style>
    <title>Register Page</title>
</head>

<body>
    <div class="container-form container justify-content-center">
        <form action="authenticate.php" method="post">
            <div class="display-4 form-title">Login</div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
        <!-- PHP Starts here -->
        <?php
        if ($_GET['error']) {
            // file_put_contents($filename,'Unsuccessful login -> '.$_GET['error']."\n", FILE_APPEND);

            if ($_GET['error'] == 'invalidUsernamePassword') {
                print "<p class='error'>Invalid Username or Password!</p>";
            } else if ($_GET['error'] == 'invalidUsername') {
                print "<p class='error'>Invalid Username!</p>";
            } else if ($_GET['error'] == 'invalidPassword') {
                print "<p class='error'>Invalid Password!</p>";
            }
        }
        ?>
    </div>
</body>

</html>