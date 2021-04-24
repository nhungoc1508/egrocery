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
    <!-- Customized CSS for all pages -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/shoppingcart.css">
    <title>Shopping Cart</title>
</head>

<body>
    <div class="container cart-ctn justify-content-center">
        <h3 class="cart-title">Shopping Cart</h3>
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
            <div class="row product-row">
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
            </div>
            <div class="row price-row">
                <h3 class="subtotal-text col-md-12 float-right">Subtotal:</h3>
                <h2 class="subtotal-price col-md-12 float-right">$99.00</h2>
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

    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>