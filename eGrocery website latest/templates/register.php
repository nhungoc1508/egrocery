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
    <title>Register Page</title>
</head>

<body>
    <div class="container-form container justify-content-center" style="opacity: 0.9; background-color:#D4B563; margin-top:3%; box-shadow: 3px 6px white; ">
        <form action="register_new_user.php" method="POST">
            <div class="display-4 form-title">Register</div>
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="first_name" aria-describedby="firstNameHelp" placeholder="Enter first name" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="last_name" aria-describedby="lastNameHelp" placeholder="Enter last name" required>
            </div>
            <!-- <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Enter phone number" required>
            </div> -->
            <!-- <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" aria-describedby="addressHelp" placeholder="Enter address" required>
            </div> -->
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">**We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I agree to the following <a tabindex="0" class="" role="button" data-toggle="popover" data-trigger="focus" title="Terms & Conditions" data-content="I agree to give each member of this project a final grade of A.">terms and conditions.</a></label>
            </div>
            <button type="submit" class="btn btn-primary">Create Account</button>
        </form>
    </div>
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
        $('.popover-dismiss').popover({
            trigger: 'focus'
        })
    </script>
</body>

</html>