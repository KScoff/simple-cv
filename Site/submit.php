<?php
session_start();
if(isset($_POST['submit-login'])) {     //if statement making sure the user navigated to the page through use of the button
  $_SESSION['username'] = $_POST['username'];       //Creating session variables of the username and password entered by the user
  $_SESSION['password'] = $_POST ['password'];
  if ($_SESSION['username']==admin && $_SESSION['password']==admin) {   // if the users credentials are correct they are granted access to submit.php and logged in
    $_SESSION['loggedin'] = true;
    header("Location: submit.php");
  }
  else {
    header("Location: session.php");  // if the credentials are incorrect access is denied
    session_unset();
  }

}
if(isset($_POST['submit-logout'])) {  //logging the user out if they click the logout button
  session_unset();
  session_destroy();
}

?>


<!DOCTYPE HTML>
<html>
  <head>
    <title>Submit publication - School of Natural Sciences</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Submit</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cv.html">CV</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calculator.html">Calculator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="list_via_browse.php">Browse</a>
      </li>
    </ul>
    <a id="submit-logout" class="btn btn-primary" href="login.php" role="button">Logout</a>
  </div>
</nav>
<div class="text-center">
    <div class="container">
      <a href="index.php"><img class="img-responsive" src="images/logo.png" alt="Keele university logo" id="logo-login"></a>
      <br>
      <h1 class="text" id="logo_header">Submit Publication Details</h1>
      <br>
      <form method="POST"action="list.php">
        <div class="row">
          <div class="col">
            <input required name="submit-title" type="text" class="form-control" class="text" placeholder="Title"/>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <input id="journal" name="submit-journal" required type="text" class="form-control" class="text" placeholder="Journal"/>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <input id="author" name="submit-author" required  type="text" class="form-control" class="text" placeholder="Author(s)"/>
          </div>
          <div class="col">
            <input id="publication" name="submit-year" required type="text" class="form-control" class="text" placeholder="Publication year"/>
          </div>
          <div class="col">
            <input id="DOI" name="submit-doi" required type="text" class="form-control" class="text" placeholder="DOI"/>
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="submit-login">Submit</button>
        </form>
      </div>
</body>
</html>
