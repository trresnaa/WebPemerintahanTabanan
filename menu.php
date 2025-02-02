<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        
        .navbar-dark .navbar-nav .nav-link {
            color: #fff; 
        }

        
        .navbar-dark .d-flex a.btn-danger {
            color: #fff; 
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="background: linear-gradient(45deg, #007bff, #28a745);">
        <div class="container-fluid">
        <a class="navbar-brand logo" href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">   
                        <a class="nav-link" href="berandapemerintahan.php">Beranda</a>
                    </li>
                    <?php if($_SESSION['level'] == 0){ ?>
                       <li class= "nav-item">
                        <a class="nav-link" href="pegawai.php">Admin</a>  
                    </li>
                       <li class= "nav-item">
                        <a class="nav-link" href="prodi.php">Bidang</a>  
                    </li>
                    <?php } ?>  
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pegawai.php">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upload.php">Pengaduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gambar.php"></a>
                    </li>
                </ul>

                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true"></a>
                </li>
                </ul>
                <div class="d-flex" role="search">
                    <a class="btn btn-danger" onclick="return confirm('YAKIN LOGOUT?')" href="logout.php">Logout</a>
                </div>

               
            </div>
        </div>
    </nav>
</body>
</html>