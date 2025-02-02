<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();
?>
<?php


$id = $_POST['id'];
$kode = $_POST['kode_bidang'];
$nama = $_POST['nama_bidang'];

$query = "UPDATE tb_bidang 
            SET kode_bidang = '$kode', 
                nama_bidang = '$nama'
            WHERE id_bidang = '$id'";
mysqli_query($koneksi, $query);

header("location: bidang.php");
?>