<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Best practice: only CSS files are included with "link rel="stylesheet", not Javascript. CSS files are also added to the 
      head of the HTML file so styles are loaded before the user accesses the website -->
    <!-- Bootstrap CSS, then optional theme, then Google Fonts, then custom header.css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&family=Potta+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">

    <title>HomepageHeader</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" name="button" class="navbar-toggle" data-toggle="collapse" data-target="myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>


            </button>
            <a href="#" class="navbar-brand">eGrocery</a>
            <div class="vl"></div>


          </div>
          <div class="navbar-header">


            </form>
            <form class="navbar-form" action="">
              <div class="form-group">

                <input type="text" name="search_product" class="form-control" placeholder="Search..">

                <!-- <a href="searchitem.php"><span class="glyphicon glyphicon-search"></span></a> -->
              </div>
              <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>

          </form>

          </div>
          <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>

              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Login </a></li>
              <div class="vl"></div>

              <li><a href="#">Account</a> </li>
              <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a></li>


            </ul>

          </div>

        </div>
      </nav>
    </header>

    <!-- Best practice: Javascript links are typically added at the end of the HTML body 
    to give HTML time to load before JS loads (speeds up response time and prevents some errors) -->
    <!-- jQuery first, then minified JS, then fontawesome, then iconify -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script defer src="https://kit.fontawesome.com/6e02521c5e.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  </body>
</html>
