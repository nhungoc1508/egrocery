<?php
include("database.php");
$username = $_POST['username'];
$password = $_POST['password'];

$select_query = "SELECT * FROM `users` WHERE `user_name` LIKE '$username' AND `password` LIKE '$password'";

$select_query_result = mysqli_query($con,$select_query);
$row = mysqli_fetch_array($select_query_result);
//
// echo $username."<br>";
// echo $row['user_name']."<br>";
// echo $password."<br>";
// echo $row['password']."<br>";



if ($username == $row['user_name'] && $password == $row['password']){
    setcookie('loggedIn','yes');
    $name = $row['first_name'];

    setcookie('name',$name);
    header("Location: homepage.php?login=$name");

    exit();
}


else if ($username != $row['user_name'] || $password != $row['password']) {

    header('Location: new_login.php?error=invalidUsernamePassword');
    exit();


}




 ?>
