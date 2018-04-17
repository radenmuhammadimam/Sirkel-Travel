<?php 
	require 'db.php';
	session_start();
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['LogIn'])){
			require 'login.php';
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="icon" href="img/passport.png">
	<title>Form Log In</title>
	<title></title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle
		collapsed" data-toggle="collapse" data-target="#navbar">
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>			
		</button>

			<a class="navbar-brand" href="index.php">Sirkel Travel</a>	
		</div>
		<div id="navbar" class ="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="signup.php">Sign Up</a></li>
			</ul>
			
		</div>
	</div>	
	</nav>
	
	<br>
	<br>
	<br>
	
	<h1 class="center-block" align="center">Silahkan Log In</h1>
	
	<div id="form">
		<form action="masuk.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="col-lg-4 control-label">
					Email<span class="req">*</span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="email" required autocomplete="off"
					name="email">
				</div>
			</div>

			<div class="form-group">
				<label class="col-lg-4 control-label">
					Password<span class="req">*</span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="password" required autocomplete="off"
					name="password">
				</div>
			</div>

			<button type="submit" class="button button-block center-block" name="login">
				Masuk
			</button>

		</form>
	</div>
</body>
</html>