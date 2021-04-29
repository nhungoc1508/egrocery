<?php
include("database.php");

$id = $_COOKIE['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$address = $_POST['address'];

print($phone);

// $select_query = "UPDATE `users` SET (`first_name`, `last_name`, `email`, `username`, `phone`, `address`) VALUES (NULL,'$first_name', '$last_name', $email', '$username', '$phone', '$address) WHERE `users`.`id` = '$id'";
$select_query = "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name', `user_name` = '$username', `email` = '$email', `phone` = '$phone', `address` = '$address' WHERE `users`.`id` = '$id'";

$info_update_submit = mysqli_query($con, $select_query);

echo $info_update_submit;
if ($info_update_submit == 1) {
  header('Location: account.php?updated=yes');
  exit();

} else {
  header('Location: account.php');
  exit();
}



?>
