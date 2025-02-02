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


	<!-- NAV start -->
<?php include "navigasibar.php" ?>	
	<!-- NAVr end -->


	<!-- start page header -->
	<section class="page-header">
		<div class="overlay">
			<div class="container">
				<div class="page-header-content">
					<h2>PENGUMUMAN DAFTAR CALON TETAP</h2>
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li>PENGUMUMAN DAFTAR CALON TETAP</li>
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
								<a href="#"><img src="assets/images/homepage1/blog/03.png" alt="thumb"></a>
							</div>
							<div class="post-content">
								<h2 class="title">PENGUMUMAN DAFTAR CALON TETAP ( DCT ) ANGGOTA DPRD KABUPATEN TABANAN UNTUK PEMILU TAHUN 2024</h2>
								<ul class="post-meta">
									<li>By: <a href="#">Admin</a></li>
									<li>22 Januari, 2024</li>
									<li><i class="fa fa-comments"></i>00</li>
								</ul>
								<p>KPU Tabanan umumkan secara resmi Daftar Calon Tetap ( DCT ) Anggota DPRD Kabupaten Tabanan untuk Pemilu Tahun 2024 pada Sabtu, 4 Nopember 2023 setelah sebelumnya dilakukan tahapan pencermatan DCT dan Finalisasi DCT yang tentu saja melibatkan Partai Politik serta pengawasan dari Badan Pengawas Pemilu Kabupaten Tabanan ( BAWASLU ), Jumat 3 Nopember 2023 KPU Tabanan telah menetapkan DCT Anggota DPRD Kabupaten Tabanan dalam Rapat Pleno yang digelar di ruang rapat kantor KPU Tabanan, Jln Sudirman No 1 Dangin Carik Tabanan Bali.</p>
								<p>Pengumuman tersebut telah diumumkan melalui media cetak Nusa Bali, Media Elektronik ( Radio Thomson ) , di Media Sosial Resmi KPU Tabanan serta ditempelkan di papan pengumuman KPU Tabanan, Berikut link Pengumuman yang dapat diakses oleh publik. </p>
								<p></p>
								<a href="https://kab-tabanan.kpu.go.id/dmdocument/16990853223.2. LAMP. PENGUMUMAN DCT.pdf">https://kab-tabanan.kpu.go.id/dmdocument/16990853223.2. LAMP. PENGUMUMAN DCT.pdf</a>
								<br><br>
								<a href="https://kab-tabanan.kpu.go.id/dmdocument/16990852533.1. PENGUMUMAN DCT.pdf">https://kab-tabanan.kpu.go.id/dmdocument/16990852533.1. PENGUMUMAN DCT.pdf</a>
								<br><br>
								<a href="https://kab-tabanan.kpu.go.id/dmdocument/16990853223.2. LAMP. PENGUMUMAN DCT.pdf">https://kab-tabanan.kpu.go.id/dmdocument/16990853223.2. LAMP. PENGUMUMAN DCT.pdf	</a>
								
							</div>
							<div class="post-footer d-flex flex-wrap justify-content-between align-items-center">
								<div class="post-tag">
									<ul class="tag d-flex flex-wrap align-items-center">
										<li><i class="fa fa-tag" aria-hidden="true"></i></li>
										<li><a href="#">PEMILU</a></li>
										
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