<?php
include("database.php");
$product_id =  $_POST['product_id'];

$user_id =  $_COOKIE['user_id'];

$select_query = "INSERT INTO `users_products` (`id`, `user_id`, `product_id`) VALUES (NULL, '$user_id', '$product_id')";

$product_added_result = mysqli_query($con, $select_query) or die(mysqli_query($con));


if ($product_added_result == 1) {
  header('Location: homepage.php?itemadded=yes');
  exit();

} else {
  header('Location: homepage.php?itemadded=no');
  exit();
}



?>


?>