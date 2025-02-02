<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();
?>
<?php


$kode = $_POST['kode_bidang'];
$nama = $_POST['nama_bidang'];

$query = "INSERT INTO tb_bidang (kode_bidang, nama_bidang) 
            VALUES ('$kode', '$nama')";
mysqli_query($koneksi, $query);

header('location: bidang.php');
?>