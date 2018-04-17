<?php
session_start();
if ($_SESSION['logged_in'] != 1){
  echo "<script>alert('anda harus login terlebih dahulu')
  window.location = 'masuk.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link src="js/jquery-3.2.1.js"></script>
    <link src="js/bootstrap.js"></script>
    <link rel="icon" href="img/passport.png">
	<title> Sirkel Travel</title>
</head>
<body>
          <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" 
            data-toggle="collapse" data-target = "#navbar">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   </button>
             
             <a class="navbar-brand" href="#home">Sirkel Travel</a>
           </div>
           <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="#home" >Home</a></li>
                  <li><a href="#about" >About</a></li>
                  <li><a href="#program" >Program</a></li>
                  <li><a href="#contact" >Contact</a></li>
                  <li><a href="logout.php" >Logout</a></li>
                  <li><a href="#" >Hello <?=$_SESSION['nama']; ?> !</a></li>
                 </ul>
            </div>
          </div>
        </nav>
<div id="home">
   <img src="img/pemandangan2.jpg" class="img-responsive">
</div>

<div id="about">
	<div class="container marketing">
		<div class ="row">
			<div class="col-lg-4">
				<img class ="img-circle" src="img/backpack.png"
				width="140" height="140">
				<h2>Backpacker</h2>
				<p>Menyediakan berbagi program Backpacker yang tersebar di seluruh Indonesia.
				Kamu dan teman-temanmu bisa memilih program Backpacker sesuai lokasi yang kamu
				inginkan dan juga budget yang kamu punya.</p>
				<p><a class="btn btn-default" href="backpacker.php">View Details &raquo;</a></p>
			</div>
			<div class ="col-lg-4">
				<img class ="img-circle" src="img/camp.png"
				width="140" height="140">
				<h2>Camping or Hiking</h2>
				<p>Menyediakan berbagi program Camping or Hiking yang tersebar di seluruh Indonesia.
				Kamu dan teman-temanmu bisa memilih program Backpacker sesuai lokasi yang kamu
				inginkan dan juga budget yang kamu punya.</p>
				<p><a class="btn btn-default" href="camping.php">View Details &raquo;</a></p>
			</div>
			<div class ="col-lg-4">
				<img class ="img-circle" src="img/travel.png"
				width="140" height="140">
				<h2>Travel</h2>
				<p>Menyediakan berbagi program Travelling yang tersebar di seluruh Indonesia.
				Kamu dan teman-temanmu bisa memilih program Backpacker sesuai lokasi yang kamu
				inginkan dan juga budget yang kamu punya.</p>
				<p><a class="btn btn-default" href="travelling.php">View Details &raquo;</a></p>
			</div>
		</div>
	</div>
</div>

<!--program-->
<div id="program">
	<div class="container">
		<hr class = "featurette-devider">
			<div class = "row featurette">
				<div class="col-lg-7">
					<h2 class ="featurette-heading">Travelling<span class="text-muted"><br>Backpacker 
					to Yogyakarta Packet</span></h2>
					<p class="lead">Daerah Istimewa Yogyakarta (bahasa Jawa: Dhaérah Istiméwa Ngayogyakarta) adalah Daerah Istimewa setingkat provinsi di Indonesia yang merupakan peleburan Negara Kesultanan Yogyakarta dan Negara Kadipaten Paku Alaman. Daerah Istimewa Yogyakarta terletak di bagian selatan Pulau Jawa, dan berbatasan dengan Provinsi Jawa Tengah dan Samudera Hindia. Daerah Istimewa yang memiliki luas 3.185,80 km² ini terdiri atas satu kotamadya, dan empat kabupaten, yang terbagi lagi menjadi 78 kecamatan, dan 438 desa/kelurahan. Menurut sensus penduduk 2010 memiliki populasi 3.452.390 jiwa dengan proporsi 1.705.404 laki-laki, dan 1.746.986 perempuan, serta memiliki kepadatan penduduk sebesar 1.084 jiwa per km².</p><p><a class="btn btn-default" href="formpesan.php">Pesan &raquo;</a></p>
				</div>
				<div class ="col-lg-5">
					<img class="img-circle" src="img/backyogya.jpg">
				</div>
			</div>			
	
		<hr class = "featurette-devider">
			<div class = "row featurette">
				<div class="col-lg-7 col-lg-push-5">
					<h2 class ="featurette-heading">Travelling<span class="text-muted"><br>Backpacker 
					to Rinjani Mount Packet</span></h2>
					<p class="lead">Gunung Rinjani adalah gunung yang berlokasi di Pulau Lombok, Nusa Tenggara Barat. Gunung yang merupakan gunung berapi kedua tertinggi di Indonesia dengan ketinggian 3.726 m dpl serta terletak pada lintang 8º25' LS dan 116º28' BT ini merupakan gunung favorit bagi pendaki Indonesia karena keindahan pemandangannya. Gunung ini merupakan bagian dari Taman Nasional Gunung Rinjani yang memiliki luas sekitar 41.330 ha dan ini akan diusulkan penambahannya sehingga menjadi 76.000 ha ke arah barat dan timur.</p><p><a class="btn btn-default" href="formpesan.php">Pesan &raquo;</a></p>
				</div>
				<div class ="col-lg-5 col-lg-pull-7">
					<img class="img-circle" src="img/rinjani.jpg">
				</div>

			<hr class = "featurette-devider">
			<div class = "row featurette">
				<div class="col-lg-7 col-lg-7">
					<h2 class ="featurette-heading">Travelling<span class="text-muted"><br>Backpacker 
					to Lombok Island Packet</span></h2>
					<p class="lead">Pulau Lombok (jumlah penduduk pada tahun 2001: 2.722.123 jiwa) adalah sebuah pulau di kepulauan Sunda Kecil atau Nusa Tenggara yang terpisahkan oleh Selat Lombok dari Bali di sebelat barat dan Selat Alas di sebelah timur dari Sumbawa. Pulau ini kurang lebih berbentuk bulat dengan semacam "ekor" di sisi barat daya yang panjangnya kurang lebih 70 km. Luas pulau ini mencapai 5.435 km², menempatkannya pada peringkat 108 dari daftar pulau berdasarkan luasnya di dunia. Kota utama di pulau ini adalah Kota Mataram.</p><p><a class="btn btn-default" href="formpesan.php">Pesan &raquo;</a></p>
				</div>
				<div class ="col-lg-5 col-lg-5">
					<img class="img-circle" src="img/travelbalilombok.jpg">
				</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("a").on('click',function(event){
			if (this.hash !== "") {
				event.preventDefault();
				var hash = this.hash;
				$('html, body').animate({
					scrollTop:$(hash).offset().top
				}, 800, function(){
					window.location.hash = hash;
				});
			}
		});
	});
</script>

</body>
</html>