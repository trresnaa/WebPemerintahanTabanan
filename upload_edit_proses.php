<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id = $_POST['id'];
$judul = $_POST['judul'];
$keterangan = $_POST['keterangan'];

$file = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_info = pathinfo($file);
$tipe = $file_info['extension'];

if(empty($file)) {
  $query = "UPDATE tb_upload 
              SET judul_dokumen = '$judul',
                  keterangan = '$keterangan'
              WHERE id_upload = '$id'";
} else {
  $query = "SELECT * FROM tb_upload WHERE id_upload = '$id'";
  $data = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_assoc($data);
  unlink("upload/" . $row['nama_file']);

  $nama_file = round(microtime(true)) . "." . $tipe;
  move_uploaded_file($file_tmp, "upload/" . $nama_file);

  $query = "UPDATE tb_upload 
              SET judul_dokumen = '$judul',
                  keterangan = '$keterangan'
              WHERE id_upload = '$id'";
}
mysqli_query($koneksi, $query);
header('location: upload.php');

