<?php 
include('database.php');
$product_id =  $_POST['product_id'];
$user_id = $_COOKIE['user_id'];

$finding_id_query = "SELECT * FROM `users_products` WHERE `user_id` = '$user_id' AND `product_id` = '$product_id';";

$finding_id_query_result = mysqli_query($con,$finding_id_query);

while($row = mysqli_fetch_array($finding_id_query_result)){
    // echo $row['id']."<br>";
    // echo $row['product_id'];
    $id = $row['id'];

    $delete_query = "DELETE FROM `users_products` WHERE `users_products`.`id` = '$id';";
    mysqli_query($con,$delete_query);
}

header("Location: shoppingcart.php?itemRemoved=yes");

exit();


?>