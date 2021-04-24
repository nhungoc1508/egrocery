<?php
include("new_navbar.php");
include("new_header.php");
include("database.php");

setcookie('name','',Time()-3600);

 $search_product = $_GET['search_product'];

 $select_query = "SELECT
 *
FROM
 products
ORDER BY
 product_price
 
DESC
LIMIT 12";
 $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));

//  include('homepageContent.php');
 include('new_footer.php');


 ?>
