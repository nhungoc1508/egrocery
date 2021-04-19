<?php
include("database.php");
$uname = $_POST['uname'];
$psw = $_POST['psw'];

$select_query = "SELECT * FROM `users` WHERE `user_name` LIKE '$uname' AND `password` LIKE '$psw'";

$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);



if ($uname == $row['user_name'] && $psw == $row['password']){
    setcookie('loggedIn','yes');
    $name = $row['first_name'];
    setcookie('name',$name);
    header("Location: loggedInhomepage.php?login=$name");
    // will cahnge this later
    exit();
}


else if ($uname != $row['user_name'] || $psw != $row['password']) {
  if ($uname == $row['user_name']) {
    header('Location: login.php?error=invalidPassword');
    exit();
  }


  else if ($psw == $row['password']) {
    header('Location: login.php?error=invalidUsername');
    exit();
  }



  else if ($uname != $row['user_name'] && $psw != $row['password']){
    header('Location: login.php?error=invalidUsernamePassword');
    exit();
  }

}




 ?>
