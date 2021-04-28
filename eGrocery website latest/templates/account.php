<!doctype html>
<html lang="en">
<?php
// Navbar added to top
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
    <!-- Customized CSS -->
    <link rel="stylesheet" type="text/css" href="../styles/account.css">
</head>

<body class="text-center">

    <div class="row d-flex justify-content-center admin-title">
        <div class="container-fluid">
            <h1>MY ACCOUNT</h1>
        </div>
        <div class="container-fluid">
            <h3>Welcome home, [insert name here]</h3>
        </div>
    </div>

    <!-- Account Navbar -->
    <nav class="navbar navbar-expand-md navbar-light justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto ml-auto nav-fill w-50 nav-admin">
                <li class="nav-item top-nav-item">
                    <a class="nav-link active" href="#">My Orders</a>
                </li>
                <li class="nav-item top-nav-item">
                    <a class="nav-link" href="#">Update Information</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Orders Tab Container -->
    <div class="tab-container orders-tab">
        <div class="container-fluid admin-btn-container">
            <button type="button" class="btn btn-primary btn-lg admin-btn-modal" data-toggle="modal" data-target="#newOrderModal">Add New Order</button>
        </div>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Delivery Address</th>
                    <th scope="col">Order Details</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>3012031</td>
                    <td>10000234</td>
                    <td>108 Mcfaraday Lane, Saadiyat Island, Abu Dhabi</td>
                    <td>
                        <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pop-up Modal to Add a New Order -->
    <div class="modal fade" id="newOrderModal" tabindex="-1" role="dialog" aria-labelledby="newOrderModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newOrderModalLabel">Add New Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="user-id" class="col-form-label">User ID</label>
                            <input type="text" class="form-control" id="user-id">
                        </div>
                        <div class="form-group">
                            <label for="delivery-address" class="col-form-label">Delivery Address:</label>
                            <textarea type="text" class="form-control" id="delivery-address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="order-details" class="col-form-label">Order Details</label>
                            <textarea type="text" class="form-control" id="order-details"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="saveOrder-button" class="btn btn-primary">Save Order</button>
                </div>
            </div>
        </div>
    </div>




    <!-- Info Tab Container -->
    <div class="tab-container info-tab">
        <h3 id="admin-info-header">Update Website Information</h3>
        <div class="about-group">
            <h4>About Us Information</h4>
            <textarea class="form-control about-textarea" id="aboutus-text"></textarea>
            <div class="about-saveinfo">
                <button class="btn btn-primary btn-lg admin-saveinfo-btn">Save</button>
            </div>
        </div>
        <div class="about-group">
            <h4>Contact Information</h4>
            <textarea class="form-control about-textarea" id="contact-text"></textarea>
            <div class="about-saveinfo">
                <button class="btn btn-primary btn-lg admin-saveinfo-btn">Save</button>
            </div>
        </div>
    </div>


    <!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Internal JavaScript -->
    <script type="text/javascript">
        showCorrectContent(); // Should show correct content when initially loading
        $(".nav-admin li a").on("click", function() {
            $(".nav-admin li a").removeClass("active");
            $(this).addClass("active");
            showCorrectContent();
        });

        // Displays content based on which tab is selected
        function showCorrectContent() {
            switch ($(".nav-admin .active").text()) {

                case ("My Orders"):
                    $(".info-tab").hide();
                    $(".orders-tab").show();
                    break;

                case ("Update Information"):
                    $(".info-tab").show();
                    $(".orders-tab").hide();
                    break;

                default:
                    alert("Other tab selected");
            }
        }
    </script>
</body>

</html>