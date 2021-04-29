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
    <link rel="stylesheet" href="../styles/homepage_content.css">
    <!-- AOS - animate on scroll library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title></title>
</head>

<body>
    <div class="row justify-content-center">
        <p class="product-name">Promotions</p>
    </div>

    <div data-aos="fade-up" data-aos-easing="ease" data-aos-delay="50" class="container product-ctn">
        <div class="">
            <div class="row mb-4 ">
                <div class="col-12 col-lg-6" id="left-ctn">
                    <div class="product-img" id="right-img">
                        <img src='https://images.unsplash.com/photo-1494597564530-871f2b93ac55?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2801&q=80' alt=''>
                    </div>
                </div>
                <div class="col-12 col-lg-6" id="right-ctn">
                    <div class="col-12">
                        <div class="content-section container-fluid flex-column justify-content-between">
                            <div class="row justify-content-center">
                                <p class="promo-title">Summer fruits sale</p>
                            </div>
                            <div class="row justify-content-center">
                                <p class="lead text-center">Starting April 31, enjoy our 15% summer sale on fresh fruits!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-aos="fade-up" data-aos-easing="ease" data-aos-delay="50" class="container product-ctn">
        <div class="">
            <div class="row mb-4 ">
                <div class="col-12 col-lg-6" id="right-ctn">
                    <div class="col-12">
                        <div class="content-section container-fluid flex-column justify-content-between">
                            <div class="row justify-content-center">
                                <p ><?php include('countdownTimer.php'); ?></p>
                                <p class="promo-title">left: Extra desserts</p>
                            </div>
                            <div class="row justify-content-center">
                                <p class="lead text-center">Get one dessert of choice for free for every two drinks ordered, limited promotions!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6" id="left-ctn">
                    <div class="product-img">
                        <img src='https://images.unsplash.com/photo-1558326567-98ae2405596b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2796&q=80' alt=''>
                    </div>
                </div>
            </div>
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