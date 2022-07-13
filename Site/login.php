<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login - Faculty of Natural Sciences</title>
  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>        <!-- navbar -->
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand">Login</a>
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
	</div>
</nav>
  <div class="container">   <!-- container for logo and username and password input -->
      <div class="text-center">
        <a href="index.php"><img class="img-responsive" src="images/logo.png" alt="Keele university logo" id="logo-login"></a>
        <br>
        <h1> Admin Login </h1>
        <br>
          <div class="form-group">
          <form action="submit.php" method="post">
          <input required title="Invalid username" type="text" name="username" class="form-control" placeholder="Username" >
          <br>
          <input required  title="Invalid password" type="password" name="password" class="form-control" placeholder="Password">
          </div>
        <button type="submit" class="btn btn-primary" name="submit-login">Login</button>
        </form>
     </div>
</body>
</html>
