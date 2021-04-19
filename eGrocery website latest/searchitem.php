<?php


$search_product = $_GET['search_product'];


$con = mysqli_connect("localhost","root","root","eGrocery") or die(mysqli_error($con));
//
$select_query = "SELECT * FROM `products` WHERE `product_name` LIKE '%$search_product%'";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);

//
print $row[0]."<br>";
print $row[1]."<br>";
print $row[2];
// while($row == mysqli_fetch_array($select_query_result)){
//   print $row[0]."<br>";
//   print $row[1]."<br>";
//   print $row[2];
//
// };



// $total_rows_fetched = mysqli_num_rows($select_query_result);
// echo $total_rows_fetched."<br>";




//
// print $search_for;


 ?>
