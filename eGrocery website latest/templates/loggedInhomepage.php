
<?php
include("loggedInheader.php");
include("database.php");

 $search_product = $_GET['search_product'];

 $select_query = "SELECT * FROM `products` WHERE `product_name` LIKE '%$search_product%'";
 $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));

 include('homepageContent.php');
?>
