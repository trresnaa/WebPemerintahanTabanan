<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$nama = $_POST['nama'];
$email = $_POST['email'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis = $_POST['jenis_kelamin'];
$bidang = $_POST['bidang'];
$minat = implode(",", $_POST['minat']);

$file = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$tipe = end(explode('.', $file));

if(empty($file)) {
  $query = "INSERT INTO tb_pegawai (nama_pegawai, email, tgl_lahir, jenis_kelamin, bidang, minat) 
              VALUES ('$nama', '$email', '$tgl_lahir', '$jenis', '$bidang', '$minat')";
} else {
  $nama_foto = round(microtime(true)) . "." . $tipe;
  move_uploaded_file($file_tmp, "foto/" . $nama_foto);
  $query = "INSERT INTO tb_pegawai (nama_pegawai, email, foto, tgl_lahir, jenis_kelamin, bidang, minat) 
              VALUES ('$nama', '$email','$nama_foto', '$tgl_lahir', '$jenis', '$bidang', '$minat')";
}
mysqli_query($koneksi, $query);

header("location: pegawai.php");


