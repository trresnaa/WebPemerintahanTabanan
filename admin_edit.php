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
    <title>Admin</title>
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
        <h3 class="text-center">Formulir Edit Admin</h3>
        <br>
        <?php 
        $id = $_GET['id'];
        $query = "SELECT * FROM tb_admin WHERE id_admin = '$id'";
        $data = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($data);
        ?>
        <form action="admin_edit_proses.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email Admin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?= $row['email'] ?>" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password1" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password1" name="password1" required minlength="3">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password2" class="col-sm-2 col-form-label">Ulangi Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password2" name="password2" required minlength="3">
                    <span id="cekPassword"></span>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="level" class="col-sm-2 col-form-label">Level User</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="level"  name="level" required>
                        <option value="">~ Pilih Level User</option>
                        <option value="0" <?= ($row['level'] == 0 ? "selected" : "") ?>>Admin</option>
                        <option value="1" <?= ($row['level'] == 1 ? "selected" : "") ?>>Pegawai</option>
                    </select>
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
    <script>
        document.getElementById("password2").addEventListener("input", function() {
            var password1 = document.getElementById("password1").value;
            var password2 = document.getElementById("password2").value;

            var passwordMatch = document.getElementById("cekPassword");

            if(password1 !== password2) {
                passwordMatch.innerHTML = "Password tidak cocok!";
                passwordMatch.style.color = "red";
            } else {
                passwordMatch.innerHTML = "Password cocok";
                passwordMatch.style.color = "green";
            }
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>