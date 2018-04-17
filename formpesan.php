<?php 
	require 'db.php';
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['Register'])){
			require 'daftar.php';
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
	<title>Form Sign Up</title>
	<title></title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container"><!--buat paging biar seimbang-->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle
		collapsed" data-toggle="collapse" data-target="#navbar">
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>
			<span class ="icon-bar"></span>			
		</button>

			<a class="navbar-brand" href="index.php">Sirkel Travel</a><!--navbar brand untuk membuat tulisan leibh besar-->	
		</div>
		<div id="navbar" class ="navbar-collapse collapse"><!--untuk menyesuaikn-->
			<ul class="nav navbar-nav"><!--buat tulisan di bawah berjejer-->
				<li><a href="index.php">Home</a></li><!--tugas dari tag a adalah membuat sebuah tulisan yang bisa menjadi link-->
				<li><a href="#contact">Contact</a></li>
				<li><a href="masuk.php">Log In</a></li>
			</ul>
			
		</div>
	</div>	
	</nav>
	<br>
	<br>
	<br>
	<h1 class="center-block" align="center">Silahkan Isi Formulir</h1>
	<div id="form">
		<form action="formpesan.php" method="post" class="form-horizontal">
			<div class="form-group"><!--untuk mendefinisikan llabel dan input dalam satu baris-->
				<label class="col-lg-4 control-label">
					Email<span class="req">*</span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="email" required autocomplete="off"
					name="email"><!--type disini sangat penting fungsinya untuk mengetahui jenis text input-->
				</div>
			</div>

			<div class="form-group"><!--untuk mendefinisikan llabel dan input dalam satu baris-->
				<label class="col-lg-4 control-label">
					Nama<span class="req">*</span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="text" required autocomplete="off"
					name="nama">
				</div>
			</div>

			<div class="form-group"><!--untuk mendefinisikan llabel dan input dalam satu baris-->
				<label class="col-lg-4 control-label">
					Tanggal Keberangkatan<span class="req">*</span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="text" required autocomplete="off"
					name="tanggal_berangkat">
				</div>
			</div>

			<div class="form-group"><!--untuk mendefinisikan llabel dan input dalam satu baris-->
				<label class="col-lg-4 control-label">
					Jumlah Orang<span class="req">*</span>
				</label>
				<div class="col-lg-4">
					<input class="form-control" type="text" required autocomplete="off"
					name="jumlah_orang">
				</div>
			</div>

			<div class="form-group"><!--untuk mendefinisikan llabel dan input dalam satu baris-->
				<label class="col-lg-4 control-label">
					Paket Wisata<span class="req">*</span>
				</label>
				<div class="col-lg-5">
				<select class="form-control" name="paket">
					<option>Gold</option>
					<option>Silver</option>
					<option>Platinum</option>
				</select>
				</div>
			</div>
			<button type="submit" class="button button-block center-block" name="Register">
				daftar
			</button>
			<center size="1">
				<a href="index.php">Home</a>
			</center>

		</form>
	</div>
</body>
</html>