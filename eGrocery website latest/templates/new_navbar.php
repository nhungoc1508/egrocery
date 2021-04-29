<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="../styles/new_header_footer.css">
    <title></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="homepage.php">eGrocery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if ($_COOKIE["loggedIn"]) { ?>
                    <?php if ($_COOKIE["name"] == "admin") { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Admin</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="account.php"><i class="fas fa-user"></i> Hello, <?php echo $_COOKIE["name"] ?></a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Log out</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link shopping-cart-img" href="shoppingcart.php"><img src="../images/shopping-cart.png" alt="Shopping cart"></a> -->
                        <a class="nav-link" href="shoppingcart.php"><i class="fas fa-shopping-cart"></i>
                            <span style="background-color: #D4B563;color:black; box-shadow: 0 0 3px 0; width: 25px; height: 25px; border-radius: 50%; position:absolute; text-align:center; top: 10%; transform:translate(-50%);">
                            <?php


                            include('database.php');

                            $user_id = $_COOKIE['user_id'];

                            $select_query = "SELECT * FROM `users_products` WHERE `user_id` = '$user_id' ";

                            $count = mysqli_query($con, $select_query);

                            $rowcount = mysqli_num_rows($count);



                            print $rowcount; ?>
                            </span>
                            </a>
                    </li>
                <?php } ?>
                <?php if (!$_COOKIE["loggedIn"]) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="new_login.php">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</body>

</html>