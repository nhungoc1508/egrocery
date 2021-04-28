<?php
include("database.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];

$email = $_POST['email'];
$password = $_POST['password'];

$select_query = "INSERT INTO `users` (`id`,`first_name`, `last_name`, `phone`, `address`, `email`, `user_name`, `password`) VALUES (NULL,'$first_name', '$last_name', '', '', '$email', '$username', '$password')";

$user_registration_submit = mysqli_query($con, $select_query) or die(mysqli_error($con));

echo $user_registration_submit;
if ($user_registration_submit == 1) {
  header('Location: new_login.php?registered=yes');
  exit();

} else {
  header('Location: register.php?registered=no');
  exit();
}



?>
