<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();
?>
<?php 

$id = $_GET['id'];

$query = "DELETE FROM tb_bidang WHERE id_bidang = '$id'";
mysqli_query($koneksi, $query);

header("location: bidang.php");
?>