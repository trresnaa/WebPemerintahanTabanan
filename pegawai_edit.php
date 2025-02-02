    <?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="javascript.js" ></script>
    <script src="javascript.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
</head>

<body>

    <?php include "menu.php" ?>
    <div class="container">
        <br>
        <h3 class="text-center">Formulir Edit Pegawai</h3>
        <br>
        <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM tb_pegawai WHERE id_pegawai = '$id'";
        $data = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($data);
        $minat = explode(",", $row['minat']);     
        ?>  
        <form action="pegawai_edit_proses.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Pegawai</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?= $row['nama_pegawai'] ?>" id="nama" name="nama" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="foto" class="col-sm-2 col-form-label">Foto Pegawai</label>
                <div class="col-sm-10">
                    <img src="<?= "foto/".$row['foto'] ?>" id="preview" height="100px">
                    <input type="file" class="form-control" id="foto" name="foto" accept=".jpg, .png" onchange="fileValidation()">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" value="<?= $row['email'] ?>" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" value="<?= $row['tgl_lahir'] ?>"id="tgl_lahir" name="tgl_lahir" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="L" value="L" required <?= ($row['jenis_kelamin'] == "L") ? "checked"  : "" ?>>        
                        <label class="form-check-label" for="L">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="P" value="P" <?= ($row['jenis_kelamin'] == "P") ? "checked"  : "" ?>>
                        <label class="form-check-label" for="P">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="bidang" class="col-sm-2 col-form-label">Bidang</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="bidang" name="bidang" required>
                        <option value="">~ Pilih Program Studi ~</option>
                        <option value="1" <?= ($row['bidang'] == "1") ? "selected" : "" ?>>Pelayanan</option>
                        <option value="2" <?= ($row['bidang'] == "2") ? "selected" : "" ?>>SDM</option>
                        <option value="3" <?= ($row['bidang'] == "3") ? "selected" : "" ?>>Administrasi</option>
                        <option value="4" <?= ($row['bidang'] == "4") ? "selected" : "" ?>>Pengadaan</option>
                        <option value="5" <?= ($row['bidang'] == "5") ? "selected" : "" ?>>Humas</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Minat</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="minat[]" value="game" id="game" <?= (in_array("game", $minat)) ? "checked" : ""?>>
                        <label class="form-check-label" for="game">
                            Game
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="minat[]" value="programming" id="programming"<?= (in_array("programming", $minat)) ? "checked" : ""?>>
                        <label class="form-check-label" for="programming">
                            Programming
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="minat[]" value="multimedia" id="multimedia" <?= (in_array("multimedia", $minat)) ? "checked" : ""?>>
                        <label class="form-check-label" for="multimedia">
                            Multimedia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="minat[]" value="videography" id="videography"<?= (in_array("videography", $minat)) ? "checked" : ""?>>
                        <label class="form-check-label" for="videography">
                            Videography
                        </label>
                    </div>
                </div>
            </div>
                <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>