<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();
levelAdmin();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>220030553 - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">

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
            <h3 class="text-center">Halaman Data Bidang</h3>
            <br>
            <a href="bidang_tambah.php" class="btn btn-primary">Tambah</a> <br> <br>
    
            <table id="example" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Bidang</th>
                        <th>Nama Bidang</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $query = "SELECT * FROM tb_bidang";
                  $data = mysqli_query($koneksi, $query);
                  while ($row = mysqli_fetch_assoc($data)) {
                  ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $row['kode_bidang'] ?></td>
                        <td><?= $row['nama_bidang'] ?></td>
                        <td>
                            <a href="bidang_edit.php?id=<?= $row['id_bidang'] ?>" class="btn btn-success btn-sm">Edit</a>
                            <a href="bidang_hapus.php?id=<?= $row['id_bidang'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin lu mau hapus bro?')">Hapus</a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kode Bidang</th>
                        <th>Nama Bidang</th>
                        <th>#</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    
<?php include "footer.php" ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>