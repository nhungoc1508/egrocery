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
  <link rel="stylesheet" type="text/css" href="../styles/admin.css">
</head>

<body class="text-center">

  <div class="row d-flex justify-content-center admin-title">
    <h1>ADMIN PANEL</h1>
  </div>

  <!-- Previous admin navbar-->
  <!-- <div class="n-container">
    <ul class="nav nav-pills nav-justified nav-admin">
      <li class="nav-item align-middle admin-nav-item">
        <a class="nav-link active" aria-current="page" href="#">Product Management</a>
      </li>
      <li class="nav-item admin-nav-item">
        <a class="nav-link" href="#">Offer Management</a>
      </li>
      <li class="nav-item admin-nav-item">
        <a class="nav-link" href="#">Orders & Shipments</a>
      </li>
      <li class="nav-item admin-nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Update Information</a>
      </li>
    </ul>
  </div> -->

  <!-- New Admin Navbar -->
  <nav class="navbar navbar-expand-md navbar-light justify-content-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto ml-auto nav-fill w-50 nav-admin">
                <li class="nav-item top-nav-item">
                    <a class="nav-link active" href="#">Product Management</a>
                </li>
                <li class="nav-item top-nav-item">
                    <a class="nav-link" href="#">Offer Management</a>
                </li>
                <li class="nav-item top-nav-item">
                    <a class="nav-link" href="#">Orders & Shipments</a>
                </li>
                <li class="nav-item top-nav-item">
                    <a class="nav-link" href="#">Update Information</a>
                </li>
            </ul>
        </div>
    </nav>



  <!-- Product Tab Container -->
  <div class="tab-container product-tab">
    <!-- Buttons -->
    <div class="container-fluid admin-btn-container">
      <button type="button" class="btn btn-primary admin-btn-modal btn-lg" data-toggle="modal" id="btnShowProductModal">Add New Product</button>
      <button class="btn btn-primary admin-btn-modal btn-lg" data-toggle="modal" data-target="#newInventoryModal">Upload Inventory File (.csv)</button>
    </div>
    <!-- Table -->
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Product Name</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price Per Unit</th>
          <th scope="col">Actions</th>
          <!-- ID -->
          <!-- Category -->
          <!-- Image -->
          <!-- Url -->
          <!-- ^^^ TO BE ADDED SOON -->
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
          <td>$0.10</td>
          <td>
            <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Apples</td>
          <td>40,203</td>
          <td>$0.25</td>
          <td>
            <button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Pop-up Modal to Add a New Product -->
  <div class="modal fade" id="newProductModal" tabindex="-1" role="dialog" aria-labelledby="newProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newProductModalLabel">Add New Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="product-name" class="col-form-label">Product Name:</label>
              <input type="text" class="form-control" id="product-name">
            </div>
            <div class="form-group">
              <label for="quantity-text" class="col-form-label">Quantity:</label>
              <input type="text" class="form-control" id="quantity-text"></input>
            </div>
            <div class="form-group">
              <label for="price-text" class="col-form-label">Price per unit:</label>
              <input type="text" class="form-control" id="price-text"></input>
            </div>

            <!-- ID -->
            <!-- Category -->
            <!-- Image -->
            <!-- Url -->
            <!-- ^^^ TO BE ADDED SOON -->

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
          <button type="button" id="saveToCatalog-button" class="btn btn-primary">Save to Catalog</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Pop-up Modal to Add a New Inventory -->
  <div class="modal fade" id="newInventoryModal" tabindex="-1" role="dialog" aria-labelledby="newInventoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newInventoryModalLabel">Add New Inventory</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label class="form-label" for="inventoryFile">Select an Inventory file (.csv) to upload. **Will this replace the existing database or append to it? Should there be options for either?</label>
              <input type="file" class="form-control" id="inventoryFile" />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="saveInventory-button" class="btn btn-primary">Append to Database</button>
        </div>
      </div>
    </div>
  </div>



  <!-- Offers Tab Container -->
  <div class="tab-container offers-tab">
    <div class="container-fluid admin-btn-container">
      <button type="button" class="btn btn-primary btn-lg admin-btn-modal" data-toggle="modal" data-target="#newOfferModal">Add New Offer</button>
    </div>
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Affected Items</th>
          <th scope="col">Discount</th>
          <th scope="col">Offer Type</th>
          <th scope="col">Start Date - End Date</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
    </table>
  </div>

  <!-- Pop-up Modal to Add a New Offer -->
  <div class="modal fade" id="newOfferModal" tabindex="-1" role="dialog" aria-labelledby="newOfferModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newOfferModalLabel">Add New Offer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="product-name" class="col-form-label">Product Name:</label>
              <input type="text" class="form-control" id="product-name">
            </div>
            <div class="form-group">
              <label for="affected-text" class="col-form-label">Affected Items:</label>
              <input type="text" class="form-control" id="affected-text"></input>
            </div>
            <div class="form-group">
              <label for="discount-text" class="col-form-label">Discount:</label>
              <input type="text" class="form-control" id="discount-text"></input>
            </div>
            <div class="form-group">
              <label for="offer-text" class="col-form-label">Offer Type:</label>
              <input type="text" class="form-control" id="offer-text"></input>
            </div>
            <div class="form-group">
              <label for="startdate-text" class="col-form-label">Start Date:</label>
              <input type="text" class="form-control" id="startdate-text"></input>
            </div>
            <div class="form-group">
              <label for="enddate-text" class="col-form-label">End Date:</label>
              <input type="text" class="form-control" id="enddate-text"></input>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="saveOffer-button" class="btn btn-primary">Save offer</button>
        </div>
      </div>
    </div>
  </div>







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
        case "Product Management":
          $(".product-tab").show();
          $(".info-tab").hide();
          $(".offers-tab").hide();
          $(".orders-tab").hide();
          break;

        case ("Offer Management"):
          $(".product-tab").hide();
          $(".info-tab").hide();
          $(".offers-tab").show();
          $(".orders-tab").hide();
          break;

        case ("Orders & Shipments"):
          $(".product-tab").hide();
          $(".info-tab").hide();
          $(".offers-tab").hide();
          $(".orders-tab").show();
          break;

        case ("Update Information"):
          $(".product-tab").hide();
          $(".info-tab").show();
          $(".offers-tab").hide();
          $(".orders-tab").hide();
          break;

        default:
          alert("Other tab selected");
      }
    }

    $("#btnShowProductModal").click(function() {
      $("#newProductModal").modal('show');

      // Why does this run an increasing amount of time based on the # of times the 'showModal' btn is clicked??
      $("#newProductModal").on("shown.bs.modal", function(event) {
        // If save button is clicked
        $("#saveToCatalog-button").click(function() {

          // Save the new product to the database
          $("#newProductModal").modal('hide');
        });
      });
    });

    // Modal pop-up to add new product
    $('#newProductModal').on('shown.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes

      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)

      // Save Product To Catalogue
      $("#saveToCatalog-button").on("click", function () {
        // Add product to catalog
        alert("Saved to Catalog.");
        // Dismiss the modal pop-up
      });
    });

    // Modal pop-up to add new offer
    $('#newOfferModal').on('show.bs.modal', function(event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes

      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
    });
  </script>
</body>

</html>