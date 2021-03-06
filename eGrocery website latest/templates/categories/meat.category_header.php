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
    <link rel="stylesheet" href="../styles/category_header.css">
    <link rel="stylesheet" href="../styles/new_header_footer.css">
    <title>Meat</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light gradient justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto ml-auto nav-fill w-50">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php?category=Beverages">Beverages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php?category=Dairy">Dairy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php?category=Desserts">Desserts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php?category=Dry goods">Dry goods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php?category=Fruits">Fruits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php?category=Vegetables">Vegetables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php?category=Meat">Meat</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row justify-content-center"">
        <div class="container overlay">
            <div class="d-flex justify-content-center">
                <div class="category-title">
                    <h3 class="display-3 category-name">Meat</h3>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1607198179219-cd8b835fdda7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2849&q=80" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1558030006-450675393462?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2978&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1614473491229-17bf47b9e487?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2767&q=80" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <form class="searchbar col-6" action="homepage.php">
                    <div class="form-group row">
                        <label for="search-input">
                            <i class="fas fa-search" id="search-icon"></i>
                        </label>
                        <input id="search-input" class="search_input" type="text" name="search_product" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
