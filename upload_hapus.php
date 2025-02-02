<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();

$id = $_GET['id'];

$query = "SELECT * FROM tb_upload WHERE id_upload = '$id'";
$data = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($data);

unlink("upload/" . $row['nama_file']);

$query = "DELETE FROM tb_upload WHERE id_upload = '$id'";
mysqli_query($koneksi, $query);

header("location:upload.php");