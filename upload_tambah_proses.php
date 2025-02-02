<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();


$judul = $_POST['judul'];
$keterangan = $_POST['keterangan'];

$file = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];


$file_info = pathinfo($file);
$tipe = $file_info['extension'];



$nama_file = round(microtime(true)) . "." . $tipe;

move_uploaded_file($file_tmp, "upload/" . $nama_file);

$query = "INSERT INTO tb_upload (judul_dokumen, nama_file, keterangan) 
            VALUES ('$judul', '$nama_file', '$keterangan')";
mysqli_query($koneksi, $query);

header('location: upload.php');
