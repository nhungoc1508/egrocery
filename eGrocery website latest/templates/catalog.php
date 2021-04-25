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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
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
                        <i class="fas fa-cart-arrow-down" id="shopping-cart-icon"></i>
                    </div>
                    <!-- <p class="product-category text-uppercase"><?php echo $row['category']; ?></p> -->
                    <p class='text-capitalize'><strong><?php echo $row['product_name']; ?></strong></p>
                    <p>AED <?php echo $row['product_price']; ?></p>
                    <p><small><em><?php echo $row['availability']; ?></em></small></p>
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