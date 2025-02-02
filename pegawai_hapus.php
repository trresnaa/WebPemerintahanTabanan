<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();
?>
<?php


$id = $_GET['id'];

$query = "DELETE FROM tb_pegawai WHERE id_pegawai = '$id'";
mysqli_query($koneksi, $query);

header("location: pegawai.php");
?>


