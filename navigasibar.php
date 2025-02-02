<!-- Start Header -->
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg p-lg-0" >
            <a class="navbar-brand logo" href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
            <a class="navbar-brand logo" href="index.html"><img src="assets/images/logo/02.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-aleaksuto">
                    <li><a href="berandapemerintahan.php">Home</a></li>
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