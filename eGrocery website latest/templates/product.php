<?php

include("new_navbar.php");
include("new_header.php");
include("database.php");

setcookie('name','',Time()-3600);

 $search_product = $_GET['search_product'];

 $select_query = "SELECT * FROM `products` WHERE `id` = $search_product";
 $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));

//  include('homepageContent.php');
// include('homepageHeaderNEW.php');
//include('catalog.php');
include("product_content.php");
include("new_footer.php");


 ?>