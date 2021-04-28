<?php
include("database.php");
$username = $_POST['username'];
$password = $_POST['password'];

$select_query = "SELECT * FROM `users` WHERE `user_name` LIKE '$username' AND `password` LIKE '$password'";

$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);



if ($username == $row['user_name'] && $password == $row['password']){
    setcookie('loggedIn','yes');
    $name = $row['first_name'];
    setcookie('name',$name);
    header("Location: homepage.php?login=$name");
    // will cahnge this later
    exit();
}


else if ($username != $row['user_name'] || $password != $row['password']) {
  if ($username == $row['user_name']) {
    header('Location: new_login.php?error=invalidPassword');
    exit();
  }


  else if ($password == $row['password']) {
    header('Location: new_login.php?error=invalidUsername');
    exit();
  }



  else if ($username != $row['user_name'] && $password != $row['password']){
    header('Location: new_login.php?error=invalidUsernamePassword');
    exit();
  }

}




 ?>
