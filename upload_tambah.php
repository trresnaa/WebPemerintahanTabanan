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
    <title>Upload Tambah</title>
    <script src="javascript.js"></script>
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
    <!-- Daftar Menu -->
    <?php include "menu.php" ?>
    <!-- Daftar Menu -->
    <div class="container">
        <br>
        <h3 class="text-center">Formulir Upload Laporan</h3>
        <br>
        <form id="uploadForm" action="upload_tambah_proses.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul Laporan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="file" class="col-sm-2 col-form-label">Upload Dokumen</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="file" name="file" accept=".docx, .pdf, .jpg, .jpeg, .png" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            var input = document.getElementById('file');
            if (input.files.length > 0) {
                var fileSize = input.files[0].size; // Ukuran file dalam byte

                // Batasan ukuran file (Dalam Byte)
                var maxSize = 5 * 1024 * 1024; // contoh: Batasan 5MB

                if (fileSize > maxSize) {
                    event.preventDefault();
                    alert('Ukuran file terlalu besar! Maksimum 5MB');
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>