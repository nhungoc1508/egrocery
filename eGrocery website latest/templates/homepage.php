<?php

include("new_navbar.php");
// include("new_header.php");
include("database.php");

// setcookie('name','',Time()-3600);

//
if ($_GET['search_product']){

  $search_product = $_GET['search_product'];

  $select_query = "SELECT * FROM `products` WHERE `product_name` LIKE '%$search_product%'";
  
  include("new_header.php");

}
else if ($_GET['category']){
  $search_product = $_GET['category'];
  // print "categories/$search_product.category_header.php";
  include("categories/$search_product.category_header.php");

  $select_query = "SELECT * FROM `products` WHERE `category` LIKE '%$search_product%'";

}
else{

   $select_query = "SELECT
   *
  FROM
   products
  ORDER BY
   product_price

  DESC
  LIMIT 12";

include("new_header.php");
}

 $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));

include("catalog.php");

include("new_footer.php");


 ?>
