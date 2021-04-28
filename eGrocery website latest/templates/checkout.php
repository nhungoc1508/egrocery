<!DOCTYPE html>
<html lang="en">

<?php
include("new_navbar.php");
include("header_category.php");
include("database.php");

$total = 0;
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
    <link rel="stylesheet" href="../styles/checkout.css">
    <title>Checkout</title>
</head>

<body>
    <div class="container checkout-ctn justify-content-center">
        <div class="row justify-content-center">
            <p class="display-4 checkout-title">Checkout</p>
        </div>
        <div class="Box mb-3">
            <div class="Box-header Box-header--blue position-relative">

            </div>

            <div class="row title-row">

                <div class="col-lg-2 mb-4">
                    <!-- Empty Space -->
                </div>

                <!--Grid column-->
                <div class="col-lg-8 mb-4">

                    <h3>Delivery Address</h3>

                    <!-- Card code borrowed from https://mdbootstrap.com/docs/b4/jquery/ecommerce/design-blocks/ecommerce-checkout/ -->
                    <!-- Card -->
                    <div class="card pb-1 checkout-card">
                        <div class="card-body">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-lg-6">

                                    <!-- First name -->
                                    <div class="md-form md-outline mb-0 mb-lg-4">
                                        <label for="firstName">First name</label>
                                        <input type="text" id="firstName" class="form-control mb-0 mb-lg-2">
                                    </div>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-lg-6">

                                    <!-- Last name -->
                                    <div class="md-form md-outline">
                                        <label for="lastName">Last name</label>
                                        <input type="text" id="lastName" class="form-control">
                                    </div>

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                            <!-- Address Part 1 -->
                            <div class="md-form md-outline mt-0">
                                <label for="form14">Address Part 1</label>
                                <input type="text" id="form14" placeholder="House number and street name" class="form-control">
                            </div>

                            <!-- Address Part 2 -->
                            <div class="md-form md-outline">
                                <label for="form15">Address Part 2</label>
                                <input type="text" id="form15" placeholder="Apartment, suite, unit etc. (optional)" class="form-control">
                            </div>

                            <!-- Postcode / ZIP -->
                            <div class="md-form md-outline">
                                <label for="form16">Postcode / ZIP</label>
                                <input type="text" id="form16" class="form-control">
                            </div>

                            <!-- Town / City -->
                            <div class="md-form md-outline">
                                <label for="form17">Town / City</label>
                                <input type="text" id="form17" class="form-control">
                            </div>

                            <!-- Emirate -->
                            <div class="d-flex flex-wrap">
                                <div class="select-outline position-relative w-100">
                                    <label>Emirate</label>
                                    <select class="mdb-select md-form md-outline">
                                        <option value="" disabled selected>Choose your Emirate</option>
                                        <option value="1">Abu Dhabi</option>
                                        <option value="2">Ajman</option>
                                        <option value="3">Dubai</option>
                                        <option value="4">Fujairah</option>
                                        <option value="5">Ras Al Khaimah</option>
                                        <option value="4">Sharjah</option>
                                        <option value="4">Umm Al Quwain</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Phone
                            <div class="md-form md-outline">
                                <label for="form18">Phone</label>
                                <input type="number" id="form18" class="form-control">
                            </div>

                            Email address
                            <div class="md-form md-outline">
                                <label for="form19">Email address</label>
                                <input type="email" id="form19" class="form-control">
                            </div> -->

                            <!-- Additional information -->
                            <div class="md-form md-outline">
                                <label for="form76">Additional information</label>
                                <textarea id="form76" class="md-textarea form-control" rows="4"></textarea>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <!-- Empty Space -->
                </div>
                <!-- Card -->

                <div class="row product-row">
                </div>
                <div class="row price-row">
                    <h3 class="subtotal-text col-md-12 float-right">Subtotal:</h3>
                    <h2 class="subtotal-price col-md-12 float-right">AED</h2>
                    <div class="container-fluid confirm-payment-ctn">
                        <button type="button" class="btn btn-primary btn-confirm-payment float-right">Confirm Payment</button>
                    </div>
                </div>
            </div>
        </div>
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