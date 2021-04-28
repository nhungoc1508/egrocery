<!DOCTYPE html>
<html lang="en">

<?php
include("new_navbar.php");
include("header_category.php");
include("database.php");

$total = 0;
// include("new_header.php");
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- This line of code allows for a user to automatically download Bootstrap CSS files onto their browser via a CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Customized CSS for all pages -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/shoppingcart.css">
    <title>Shopping Cart</title>
</head>

<body>
    <div class="container cart-ctn justify-content-center">
        <div class="row justify-content-center">
            <p class="display-4 cart-title">Shopping cart</p>
        </div>




        <div class="Box mb-3">
            <div class="Box-header Box-header--blue position-relative">

            </div>
            <div class="row title-row">
                <div class="col-md-6">
                    Product
                </div>
                <div class="col-md-2">
                    Price
                </div>
                <div class="col-md-2">
                    Quantity
                </div>
                <div class="col-md-2">

                </div>
            </div>
            <?php

            // 
            $user_id = $_COOKIE['user_id'];

            $select_query = "SELECT * FROM `users_products` WHERE `user_id` = '$user_id'";




            $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
            // echo "hello";

            while ($product_lists = mysqli_fetch_array($select_query_result)) {

                // echo $product_lists['id']."<br>";
                // echo $product_lists['product_id']."<br>";
                // echo $product_lists['user_id']."<br>";

                $product_id = $product_lists['product_id'];

                $product_result = "SELECT * FROM `eGrocery`.`products` WHERE `id` = '$product_id'";
                $select_query_product_result = mysqli_query($con, $product_result) or die(mysqli_error($con));
                // $items = mysqli_fetch_array($product_result);
                // echo $items['id'];
                // echo $items['product_name'];
                // echo $items['product_price'];
                // echo $items['category'];
                // echo $items['availability'];
                while ($items = mysqli_fetch_array($select_query_product_result)) {
                    // echo $items['id'];
                    // echo $items['product_name'];
                    // echo $items['product_price'];
                    // echo $items['category'];
                    // echo $items['availability'];

                    $product_name = $items['product_name'];
                    $product_price = $items['product_price'];
                    $category = $items['category'];
                    $availability = $items['availability'];
                    $img_url = $items['img_url'];

            ?>
                    <div class="row product-row">
                        <div class="col-md-2">
                            <div class="product-img">
                                <img src="<?php echo $img_url; ?>" alt="<?php echo $row['product_name']; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h4 class="text-capitalize product-name"><?php print $product_name; ?></h4>
                            <p class="text-uppercase category"><?php print $category; ?></p>
                        </div>
                        <div class="col-md-2">
                            <p class="lead">AED <?php print $product_price; 
                            $total = $total + $product_price;
                             
                             ?></p>
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control" id="quantity" aria-describedby="quantityHelp" placeholder="Quantity" required>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>


            <?php



                }
            }




            // 

            ?>
            <!-- <div class="row product-row">
                <div class="col-md-2">
                    <img class="product-img">
                </div>
                <div class="col-md-4">
                    <h4 class="product-name">Product Name</h4>
                    <p class="category">Category</p>
                </div>
                <div class="col-md-2">
                    Price
                </div>
                <div class="col-md-2">
                    <input type="number" class="form-control" id="quantity" aria-describedby="quantityHelp" placeholder="Quantity" required>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                </div>
            </div> -->
            <div class="row price-row">
                <h3 class="subtotal-text col-md-12 float-right">Subtotal:</h3>
                <h2 class="subtotal-price col-md-12 float-right">AED <?php print $total; ?></h2>
                <div class="container-fluid container-checkout">
                    <button type="button" class="btn btn-primary btn-checkout float-right">Checkout</button>
                </div>
            </div>
        </div>
        <!-- Table
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="category">
                    <th scope="row">Fruit</th>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Bananas</td>
                    <td>50,000</td>
                    <td>
                        <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Apples</td>
                    <td>40,203</td>
                    <td>
                        <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
            </tbody>
        </table> -->
    </div>
    <?php
    include("new_footer.php");

    ?>


    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>