<?php
session_start();
 ?>
<html>
<head>
  <title> List of publications </title>
  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>                  <!--navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" >Publications</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CV.html">CV</a>
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
</body>
<?php           //printing the contents of the formdata file
$data = file_get_contents('formdata.csv');
echo "$data";
?>
</html>
