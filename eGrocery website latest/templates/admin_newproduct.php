<?php
include("database.php");

$name = $_POST['name'];
$avail = $_POST['avail'];
$category = $_POST['category'];
$price = $_POST['price'];
$url = $_POST['url'];

print($phone);

// $select_query = "UPDATE `users` SET (`first_name`, `last_name`, `email`, `username`, `phone`, `address`) VALUES (NULL,'$first_name', '$last_name', $email', '$username', '$phone', '$address) WHERE `users`.`id` = '$id'";
// $select_query = "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name', `user_name` = '$username', `email` = '$email', `phone` = '$phone', `address` = '$address' WHERE `users`.`id` = '$id'";
$select_query = "INSERT INTO `products` (`product_name`, `product_price`, `category`, `availability`, `img_url`) VALUES ('$name', '$price', '$category', '$avail', '$url')";
$info_update_submit = mysqli_query($con, $select_query);

echo $info_update_submit;
if ($info_update_submit == 1) {
  header('Location: admin.php');
  exit();

} else {
  header('Location: admin.php');
  exit();
}



?>
