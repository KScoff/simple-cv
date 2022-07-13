<?php
session_start();
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>Faculty of Natural Sciences - Keele University</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="homepage-body">       <!--navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="cv.html">CV<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calculator.html">Calculator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_via_browse.php">Browse</a>
      </li>
    </ul>
    <a class="btn btn-primary" href="login.php" role="button">Admin Login</a>
  </div>
</nav>
<div id="header">
  <div class="container"> <!--container for logo and submit and browse buttons -->
    <div class="text-center">
      <div class="container">
        <img class="float-top img-fluid" src="images/logo.png" alt="Keele university logo" id="homepage-logo">
        <h1 class="text" id="logo_header">Faculty of Natural Sciences:<h1>
        <h1 class="text" id="logo-h2">Publications<h1>
        <a class="btn btn-primary" href="login.php" role="button">Submit</a>
        <a class="btn btn-primary" href="list_via_browse.php" role="button">Browse</a><br>
      </div>
    </div>
  </div>
</div>
  <br>
  <div id="footer">
    <div class="container"> <!--container for school RSS buttons -->
      <div class="text-center">
        <h2 class="text">Publications by school (RSS)<h2>
          <div class="btn-group-vertical">
            <button onclick="window.location.href = 'rss/scm.html';" type="button" class="btn btn-primary">
              School of Computing and Mathematics
            </button>
            <button onclick="window.location.href = 'rss/scp.html';" type="button" class="btn btn-primary">
              School of Chemical and Physical Sciences
            </button>
            <button onclick="window.location.href = 'rss/sgge.html';" type="button" class="btn btn-primary">
              School of Geography, Geology and the Environment
            </button>
            <button onclick="window.location.href = 'rss/sls.html';" type="button" class="btn btn-primary">
              School of Life Sciences
            </button>
            <button onclick="window.location.href = 'rss/spgs.html';" type="button" class="btn btn-primary">
              School of Physical and Geographical Sciences
            </button>
            <button onclick="window.location.href = 'rss/sp.html';" type="button" class="btn btn-primary">
              School of Psychology
            </button>
         </div>
     </div>
   </div>
 </div>
</body>
</html>
