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
    <link rel="stylesheet" href="../styles/product_content.css">
    <!-- AOS - animate on scroll library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Product view</title>
</head>

<body>
    <div data-aos="fade-up" data-aos-easing="ease" data-aos-delay="50" class="container product-ctn">
        <div class="">
            <?php
            if ($select_query_result) {

                $result = $select_query_result;
            } else {
                $result = "SELECT * FROM `products`";
            }
            while ($row = mysqli_fetch_array($result)) { ?>
                <div class="row mb-4 ">
                    <div class="col-12 col-lg-6">
                        <div class="row d-flex justify-content-center">
                            <div class="product-img">
                                <img src='<?php echo $row['img_url']; ?>' alt='<?php echo $row['product_name']; ?>'>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="col-12">
                            <div class="content-section">
                                <div class="row">
                                    <p class="display-4 text-capitalize product-name"><?php echo $row['product_name']; ?></p>
                                </div>
                                <div class="row">
                                    <p class="lead"><em><?php echo $row['availability']; ?></em></p>
                                </div>
                            </div>
                            <div class="content-divider mb-4"> </div>
                            <div class="content-section">
                                <div class="row">
                                    <p class="lead"><strong>AED <?php echo $row['product_price']; ?></strong></p>
                                </div>
                                <form class="row d-flex justify-content-between">
                                    <div>
                                        <label for="quantity-select">Quantity:</label>
                                        <select name="quantity" id="quantity-select" class="form-select form-select-lg">
                                            <option value=1 selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <button class="add-to-cart-btn" type="submit"><i class="fas fa-cart-arrow-down"></i> Add to cart</button>
                                </form>
                            </div>
                            <div class="content-divider mb-4"> </div>
                            <div class="content-section">
                                <div class="row">
                                    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque quam quia in exercitationem soluta libero ipsa accusantium esse odio! Corrupti minus incidunt et aut magni nulla atque assumenda perspiciatis reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- AOS - animate on scroll library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End of AOS -->
</body>

</html>