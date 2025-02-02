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
					<h2>Pemilu 2024</h2>
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li>Pemilu 2024</li>
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
								<a href="#"><img src="assets/images/blog/thumb/01.jpg" alt="thumb"></a>
							</div>
							<div class="post-content">
								<h2 class="title">Kirab Pemilu 2024 di Tabanan, Mendapatkan Dukungan Bupati</h2>
								<ul class="post-meta">
									<li>By: <a href="#">Admin</a></li>
									<li>01 Januari, 2024</li>
									<li><i class="fa fa-comments"></i>00</li>
								</ul>
								<p>KPU Tabanan, Dangin Carik – Dalam rangka sosialisasi Pemilu Serentak tahun 2024, di Kabupaten Tabanan akan dilaksanakan serah terima dan pelaksanaan kirab nasional bendera Partai Politik Peserta Pemilu 2024 yang sesuai jadwal akan dilaksanakan mulai tanggal 18 Juli 2023 – 24 Agustus 2023.</p>
								<p>Berkaitan dengan itu, Ketua Komisi Pemilihan Umum (KPU) Kabupaten Tabanan, I Gede Putu Weda Subawa beserta beberapa Anggota KPU Tabanan dan Sekretaris KPU Tabanan melaksanakan pertemuan atau audiensi  dengan Bupati Tabanan, I Komang Gede Sanjaya, Rabu (26/07/2023).</p>
								<p>Turut hadir dalam kegiatan itu salah satu Kasubbag yang ada pada Sekretariat KPU Tabanan, sedangkan menurut informasi dari pihak Pemkab Tabanan selain hadir Bupati Tabanan, hadir pula beberapa Pejabat di lingkungan Pemkab Tabanan. Saat dimintai penjelasannya, I Gede Putu Weda Subawa mengungkapkan, “Audiensi tadi mendapatkan tanggapan yang baik dari Bupati Tabanan bahkan Beliau sangat mendukung Kirab Pemilu 2024 nanti.” (Humas KPU Tabanan).</p>
								
							</div>
							<div class="post-footer d-flex flex-wrap justify-content-between align-items-center">
								<div class="post-tag">
									<ul class="tag d-flex flex-wrap align-items-center">
										<li><i class="fa fa-tag" aria-hidden="true"></i></li>
										<li><a href="#">Pemilu</a></li>
										
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