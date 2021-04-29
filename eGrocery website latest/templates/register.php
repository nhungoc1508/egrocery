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
    <div class="container product-ctn col-8">
        <div class="">
            <div class="row mb-4 ">
                <div class="col-12" id="right-ctn">
                    <div class="col-12">
                        <div class="content-section">
                            <div class="row justify-content-center">
                                <p class="display-4 product-name">Register</p>
                            </div>
                        </div>
                        <div class="content-section">
                            <div class="row justify-content-center">
                                <p class="lead">Start shopping with us today</p>
                            </div>
                            <?php 
                            if($_GET['registered'] == "no"){
                                ?>
                            
                                <div class="row justify-content-center">
                                    <p class="lead" style="color:red;">Sorry! email or username has already been taken!</p>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="content-section row justify-content-center">
                            <div class="col-8">
                                <form action="register_new_user.php" method="POST" class="password-strength lead">
                                    <!-- <div class="display-4 form-title">Register</div> -->
                                    <div class="form-group">
                                        <label for="fname">First name</label>
                                        <input type="text" class="form-control" id="fname" name="first_name" aria-describedby="firstNameHelp" placeholder="Enter first name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lname">Last name</label>
                                        <input type="text" class="form-control" id="lname" name="last_name" aria-describedby="lastNameHelp" placeholder="Enter last name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                        <small id="emailHelp" class="form-text text-muted">*We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter username" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password-input">Password</label>
                                        <div class="input-group">
                                            <input class="password-strength__input form-control" type="password" name="password" id="password-input" aria-describedby="passwordHelp" placeholder="Enter password" required/>
                                            <div class="input-group-append">
                                                <button class="password-strength__visibility btn btn-outline-secondary" type="button"><span class="password-strength__visibility-icon" data-visible="hidden"><i class="fas fa-eye-slash"></i></span><span class="password-strength__visibility-icon js-hidden" data-visible="visible"><i class="fas fa-eye"></i></span></button>
                                            </div>
                                        </div>
                                        <small class="password-strength__error text-danger js-hidden">
                                            <!-- Add error text here -->
                                        </small>
                                        <small class="form-text text-muted mt-2" id="passwordHelp">Add 9 characters or more, lowercase letters, uppercase letters, numbers and symbols to make the password really strong!</small>
                                    </div>
                                    <div class="password-strength__bar-block progress mb-4">
                                        <div class="password-strength__bar progress-bar bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1">I agree to the following <a tabindex="0" class="" role="button" data-toggle="popover" data-trigger="focus" title="Terms & Conditions" data-content="I agree to give each member of this project a final grade of A.">terms and conditions.</a></label>
                                    </div>
                                    <div class="row justify-content-center">
                                        <button type="submit" class="submit-btn mb-2">Create account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("new_footer.php");
    ?>
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS, then custom password javascript -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="../scripts/password.js"></script>
    <script>
        $(function() {
            $('[data-toggle="popover"]').popover()
        })
        $('.popover-dismiss').popover({
            trigger: 'focus'
        })
    </script>
</body>

</html>