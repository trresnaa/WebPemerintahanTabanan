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
    <title>220030553 - Formulir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="javascript.js"></script>
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
        <h3 class="text-center">Edit Bidang pegawai</h3>
        <br>
        <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM tb_bidang WHERE id_bidang = '$id'";
        $data = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($data);
        ?>
        <form action="bidang_edit_proses.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="kode_bidang" class="col-sm-2 col-form-label">Kode Bidang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?= $row['kode_bidang'] ?>" id="kode_bidang" name="kode_bidang" maxlength="5">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama_bidang" class="col-sm-2 col-form-label">Nama Bidang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?= $row['nama_bidang'] ?>" id="nama_bidang" name="nama_bidang" required>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>