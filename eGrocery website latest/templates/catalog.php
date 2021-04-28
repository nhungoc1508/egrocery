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
    <link rel="stylesheet" href="../styles/catalog.css">
    <!-- AOS - animate on scroll library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- bring in the jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <title></title>
</head>

<body>
    <div class='container catalog-ctn'>
        <div class="d-flex flex-row flex-wrap justify-content-around">
            <?php

            $result = $select_query_result;

            while ($row = mysqli_fetch_array($result)) { ?>
                <div data-aos="fade-up" data-aos-easing="ease" data-aos-delay="50" class='product-card' style="background: linear-gradient(to right, #F2F2EA, white)">
                    <div class='product-img-ctn d-flex justify-content-center'>
                        <img src=<?php echo $row['img_url']; ?> alt=<?php echo $row['name']; ?>>
                        <div class="d-flex detail-btn">
                            <form action="product.php">
                                <input type="hidden" name="search_product" value="<?php echo $row['id']; ?>">
                                <input class="see-detail lead" type="submit" value="SEE DETAILS">
                            </form>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <?php if ($row['availability'] == 'In stock') {  ?>
                            <form action="add_to_cart.php" method="POST">
                                <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                                <!-- <a href="" name="product_id" value="<?php echo $row['id']; ?>" style="text-decoration:none; z-index:10;"><i class="fas fa-cart-arrow-down shopping" id="shopping-cart-icon"></i></a> -->
                                <button type="submit" id="cart-button"><i class="fas fa-cart-arrow-down shopping" id="shopping-cart-icon"></i></button>
                            </form>
                          
                        <?php } ?>
                        <?php if ($row['availability'] == 'Out of stock') { ?>
                            <i class="fas fa-cart-arrow-down shopping" id="shopping-cart-icon-unavail"></i>
                        <?php } ?>
                    </div>
                    <!-- <p class="product-category text-uppercase"><?php echo $row['category']; ?></p> -->
                    <p class='text-capitalize'><strong><?php echo $row['product_name']; ?></strong></p>
                    <p>AED <?php echo $row['product_price']; ?></p>
                    <?php if ($row['availability'] == 'In stock') { ?>
                        <p class="in-stock"><small><em><?php echo $row['availability']; ?></em></small></p>
                    <?php } ?>
                    <?php if ($row['availability'] == 'Out of stock') { ?>
                        <p class="out-of-stock"><small><em><?php echo $row['availability']; ?></em></small></p>
                    <?php } ?>
                </div>

            <?php } ?>
            <?php if (mysqli_num_rows($result) == 0) { ?>
                <div data-aos="fade-up" data-aos-easing="ease" data-aos-delay="50" class="col-10 not-found-ctn">
                    <div class="d-flex justify-content-center">
                        <h4 class="display-4 not-found-title">Product not found</h4>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p class="lead">The product you searched for is currently unavailable.</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="homepage.php">
                            <button class="not-found-btn" type="submit"><i class="fas fa-cart-arrow-down"></i> Continue shopping</button>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="contact.php">
                            <button class="not-found-btn" type="submit"><i class="fas fa-comments"></i> Give feedback</button>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- AOS - animate on scroll library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End of AOS -->
</body>