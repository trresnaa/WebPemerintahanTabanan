<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();
levelAdmin();

$email = $_POST['email'];
$password1 = md5($_POST['password1']);
$level = $_POST ['level'];


$query = "INSERT INTO tb_admin (email, password, level) 
            VALUES ('$email', '$password', $level)";
mysqli_query($koneksi, $query);

header('location: admin.php');
?>