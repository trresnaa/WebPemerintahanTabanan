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
	<title>WEBSITEPEMERINTAHAN TABANAN</title>
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
<body>
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


	<!-- Start Header -->
	<header class="header style-1">
		<div class="container">
			<nav class="navbar navbar-expand-lg sticky-top" style="background: linear-gradient(45deg, #007bff, #28a745);">
				<a class="navbar-brand logo" href="index.php"><img src="assets/images/logo/02.png" alt="logo"></a>
				<a class="navbar-brand logo" href="index.php"><img src="assets/images/logo/02.png" alt="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li ><a href="#0">Berita</a>
                        <ul class="submenu">
                            <li class=""><a href="berita1.php">Berita 1</a></li>
                            <li class=""><a href="berita2.php">Berita 2</a></li>
                            <li class=""><a href="berita3.php">Berita 2</a></li>
                        </ul>
                    </li>
					
                    <?php if($_SESSION['level'] == 0){ ?>
                       <li class= "nav-item">
                        <a class="nav-link" href="admin.php">Admin</a>  
                    </li>
                       <li class= "nav-item">
                        <a class="nav-link" href="bidang.php">Bidang</a>  
                    </li>
                    <?php } ?>		
                    <li><a href="pegawai.php">Pegawai</a></li>	
                    <li><a href="upload.php">Upload Pengaduan</a></li>	
                </ul>
                <a class="btn btn-danger" onclick="return confirm('YAKIN LOGOUT?')" href="logout.php">Logout</a>
            </div>
			</nav>
		</div>
	</header>
	<!-- End Header -->

	
	<!--   start banner section -->
	<section class="banner banner-1">
		<div class="banner-content">
			<div class="container">
				<div class="banner-content-text">
					<h1 class="text-capitalize"><span class="d-sm-block">Ayo buat</span> Tabanan Emas 2025</h1>
					<h6>Demi Indonesia yang Maju dan Kaya</h6>
					
				</div>
			</div>
		</div>
	</section>
	<!--   end banner section -->


	<!-- start about section  -->
	<section class="about-section section-bg-color home-1">
		<div class="about-section-content">
			<div class="container">
				<div class="row justify-content-center flex-row-reverse">
					<div class="col-xl-5">
						<div class="about-politican">
							<div class="about-bio d-flex flex-wrap">
								<div class="politician-thumb">
									<img src="assets/images/homepage1/about/politician1.jpg" alt="thumb">
								</div>
								<div class="politician-content text-center text-sm-left">
									<h4 class="name">I Komang Gede Sanjaya</h4>
									<p class="designation">Bupati Tabanan</p>
									<ul class="social-media justify-content-center justify-content-md-start">
										<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="about-qoute">
								<h5><i>Tahun Baru Semangat Baru</i></h5>
								<p>“Semoga tahun baru 2024 membawa semangat baru dan harapan baru bagi seluruh masyarakat Kabupaten Tabanan. Semoga kita semua selalu diberikan kesehatan, kebahagiaan, dan kesejahteraan.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-7">
						<div class="about-media row no-gutters">
							<div class="col-md-12">
								<div class="media-thumb">
									<img src="assets/images/homepage1/about/media/01.jpg" alt="media" class="w-100">
									<a href="https://www.youtube.com/embed/DMw_UpS2Mnw" data-rel="lightcase" class="play"><i class="fa fa-play"></i></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media-thumb">
									<img src="assets/images/homepage1/about/media/02.jpg" alt="media">
									<a href="https://www.youtube.com/embed/BitXBRMrwr8" data-rel="lightcase" class="play"><i class="fa fa-play"></i></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media-thumb">
									<img src="assets/images/homepage1/about/media/03.jpg" alt="media">
									<a href="https://www.youtube.com/embed/9nxN-RV5hhk" data-rel="lightcase" class="play"><i class="fa fa-play"></i></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media-thumb">
									<img src="assets/images/homepage1/about/media/04.jpg" alt="media">
									<a href="https://www.youtube.com/embed/npumwhhq0So" data-rel="lightcase" class="play"><i class="fa fa-play"></i></a>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end about section  -->


	


	<!-- start latest news section  -->
	<section class="latest-news-section section-padding-140 section-bg-color">
		<div class="container">
			<div class="section-heading">
				<h2>Berita Terkini</h2>
				<p>Kenali apa yang terjadi di sekitar tabanan </p>
			</div>
			<div class="section-wrapper row justify-content-center">
				<div class="col-lg-4 col-sm-6">
					<div class="post-item">
						<div class="post-thumb">
							<a href="berita1.php"><img src="assets/images/homepage1/blog/01.jpg" alt="thumb"></a>
						</div>
						<div class="post-content">
							<h6 class="title"><a href="berita1.php">Kirab Pemilu 2024 di Tabanan, Mendapatkan Dukungan Bupati</a></h6>
							<ul class="post-meta">
								<li>1 Januari, 2024</li>
								<li><i class="fa fa-comments"></i>00</li>
							</ul>
							<p>Dalam rangka sosialisasi Pemilu Serentak tahun 2024, di Kabupaten Tabanan akan dilaksanakan serah terima dan pelaksanaan kirab nasional bendera Partai Politik Peserta Pemilu 2024 yang sesuai jadwal akan dilaksanakan mulai tanggal 18 Juli 2023 – 24 Agustus 2023.</p>
							<a href="berita1.php" class="custom-btn custom-btn-sm pull-left">Baca Seterusnya</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="post-item">
						<div class="post-thumb">
							<a href="berita2.php"><img src="assets/images/homepage1/blog/02.jpeg" alt="thumb"></a>
						</div>
						<div class="post-content">
							<h6 class="title"><a href="berita2.php">SIM Keliling Tabanan </a></h6>
							<ul class="post-meta">
								<li>19 Januari, 2024</li>
								<li><i class="fa fa-comments"></i>00</li>
							</ul>
							<p>Pastikan kembali Surat Izin Mengemudi (SIM) Anda masih tetap berlaku. Warga Bali yang hendak memperpanjang masa berlakunya SIM, langsung saja datangi pelayanan SIM Keliling di wilayah Bali hari ini, Jumat 19 Januari 2024..</p>
							<a href="berita2.php" class="custom-btn custom-btn-sm pull-left">Baca Seterusnya</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="post-item">
						<div class="post-thumb">
							<a href="berita3.php"><img src="assets/images/homepage1/blog/03.png" alt="thumb"></a>
						</div>
						<div class="post-content">
							<h6 class="title"><a href="berita3.php">PENGUMUMAN DAFTAR CALON TETAP ( DCT ) ANGGOTA DPRD KABUPATEN TABANAN UNTUK PEMILU TAHUN 2024</a></h6>
							<ul class="post-meta">
								<li>22 Januari, 20204</li>
								<li><i class="fa fa-comments"></i>00</li>
							</ul>
							<p>KPU Tabanan umumkan secara resmi Daftar Calon Tetap ( DCT ) Anggota DPRD Kabupaten Tabanan untuk Pemilu Tahun 2024 pada Sabtu, 4 Nopember 2023.</p>
							<a href="berita3.php" class="custom-btn custom-btn-sm pull-left">Baca Seterusnya</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end latest news section  -->


	<?php include "footer.php" ?>

	<script src='assets/js/plugins.js'></script>
	<script src='assets/js/function.js'></script>
</body>
</html>