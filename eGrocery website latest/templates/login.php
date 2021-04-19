<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- jQuery Library -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script defer src="https://kit.fontawesome.com/6e02521c5e.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&family=Potta+One&display=swap" rel="stylesheet">

    <script src="" charset="utf-8"></script>
    <link rel="stylesheet" href="login.css">
    <style media="screen">

    <?php
      if($_GET['error']){
        print ".error{
       text-align: center;
       font-size: 14px;
       font-weight: bolder;
       position: absolute;
       left: 50%;
       top: 10%;
       transform: translate(-50%,-20%);
       color: red;
       background-color: pink;
       border: none;
       width: 230px;
       padding: 4px;
       opacity: 0.85;

       outline: none;
     }";
      }
      ?>
    </style>
    <title>LogIn</title>
  </head>
  <body>

    <div class="container">
      <div class="jumbotron head">
        <h1><center>eGrocery</center></h1>

      </div>



      <div class="login-box">

        <form action="authenticate.php" method="post" class="jumbotron" >


          <div class="container">
            <h2> Log In</center></h2>

            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="container" style="background-color:#fff">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
        <!--  -->
        <?php


              if ($_GET['error']){
                // file_put_contents($filename,'Unsuccessful login -> '.$_GET['error']."\n", FILE_APPEND);

                if ($_GET['error']=='invalidUsernamePassword') {
                  print "<p class='error'>Invalid Username or Password!</p>";
                }
                else if ($_GET['error']=='invalidUsername') {
                  print "<p class='error'>Invalid Username!</p>";
                }
                else if ($_GET['error']== 'invalidPassword') {
                  print "<p class='error'>Invalid Password!</p>";
                }





            }
           ?>

        <!--  -->


      </div>


    </div>






  </body>
</html>
