<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WEBSITE PEMERINTAHAN TABANAN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" href="assets/css/lightcase.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="body-padding">
	<!-- preloader start -->
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
		</div>
	</div>
	<!-- preloader end -->

<?php include "navigasibar.php" ?>	
	


	<!-- start page header -->
	<section class="page-header">
		<div class="overlay">
			<div class="container">
				<div class="page-header-content">
					<h2>SIM KELILING</h2>
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>SIM KELILING TABANAN</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end page header -->


	<!-- start main content area -->
	<div class="site-content single-page section-bg-color section-padding-140">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 main-content">
					<div class="blog-content">
						<article class="entry-single post-item">
							<div class="post-thumb">
								<a href="#"><img src="assets/images/homepage1/blog/02.jpeg" alt="thumb"></a>
							</div>
							<div class="post-content">
								<h2 class="title">SIM KELILING TABANAN</h2>
								<ul class="post-meta">
									<li>By: <a href="#">Admin</a></li>
									<li>19 Januari, 2024</li>
									<li><i class="fa fa-comments"></i>00</li>
								</ul>
								<p>Pastikan kembali Surat Izin Mengemudi (SIM) Anda masih tetap berlaku. Warga Bali yang hendak memperpanjang masa berlakunya SIM, langsung saja datangi pelayanan SIM Keliling di wilayah Bali hari ini, Jumat 19 Januari 2024.</p>
								<p> Warga Tabanan Bali yang ingin melakukan perpanjangan masa berlaku Surat Ijin Mengemudi (SIM), anda dapat mengunjungi Satpas atau pelayanan SIM Keliling Polres Tabanan Bali yang sudah disediakan.</p>
								<p>Layanan SIM Keliling Polres Tabanan hanya melayani permohonan perpanjangan SIM A dan C yang dapat dilakukan sebelum masa berlaku habis. Apabila masa berlaku SIM habis diberlakukan penerbitan seperti SIM Baru.</p>
								<p>Syarat perpanjangan SIM A atau C sebagai berikut:
									1. Foto Kopi KTP yang masih berlaku,
									2. Foto Kopi SIM lama dan SIM asli,
									3. Tes Psikologi SIM,
									4. Surat Keterangan Sehat.</p>
								
							</div>
							<div class="post-footer d-flex flex-wrap justify-content-between align-items-center">
								<div class="post-tag">
									<ul class="tag d-flex flex-wrap align-items-center">
										<li><i class="fa fa-tag" aria-hidden="true"></i></li>
										<li><a href="#">SIM</a></li>
										
									</ul>
								</div>
								
							</div>
						</article>

						
					
				</aside>
			</div>
		</div>
	</div>
	<!-- end main content area -->


	<?php include "footer.php"?>



	<script src='assets/js/plugins.js'></script>
	<script src='assets/js/function.js'></script>
</body>
</html>