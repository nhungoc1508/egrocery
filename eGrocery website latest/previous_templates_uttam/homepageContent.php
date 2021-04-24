

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="homepage.css">
    <title>HomepageContent</title>
  </head>
  <body>

    <?php

    // include("homepageHeader.php");
    // include("database.php");
    //
    //  $search_product = $_GET['search_product'];
    //
    //  $select_query = "SELECT * FROM `products` WHERE `product_name` LIKE '%$search_product%'";
    //  $select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
    //

     ?>

     <div class="container">
       <div class="jumbotron">
         <center>
           <h1>Shop with us for the best quality products.</h1>
         </center>

       </div>
     </div>

     <div class="container">
       <div class="jumbotron">
         <?php
         if($select_query_result){

           $result = $select_query_result;

         }
         else{
           $result = "SELECT * FROM `products`";
         }
         while ($row = mysqli_fetch_array($result)) {?>

           <div class="row">
             <div class="col-lg-12">
               <h4>Item</h4>

             </div>

           </div>
           <div class="row">
             <div class="col-xs-2">
               ID
             </div>
             <div class="col-xs-10"><?php echo $row['id']; ?>

             </div>

           </div>
           <div class="row">
             <div class="col-xs-2">
               Product name
             </div>
             <div class="col-xs-10"><?php echo $row['product_name']; ?>

             </div>

           </div>
           <div class="row">
             <div class="col-xs-2">
               Product price
             </div>
             <div class="col-xs-10"><?php echo $row['product_price']; ?>

             </div>

           </div>
           <div class="row">
             <div class="col-xs-2">
               Category
             </div>
             <div class="col-xs-10"><?php echo $row['category']; ?>

             </div>

           </div>
           <div class="row">
             <div class="col-xs-2">
               Availability
             </div>
             <div class="col-xs-10"><?php echo $row['availability']; ?>

             </div>

           </div>
           <hr>
         <?php } ?>

       </div>
     </div>

















  </body>
</html>
