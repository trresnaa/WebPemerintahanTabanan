<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();



$id = $_POST['id'];
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
    $query = "UPDATE tb_pegawai
                SET nama_pegawai = '$nama', email = '$email', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis', bidang = '$bidang', minat = '$minat' 
                WHERE id_pegawai = '$id'";
} else {
    $query = "SELECT * FROM tb_pegawai WHERE id_pegawai = '$id'";
    $data = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($data);
    if($row['foto'] != "defaultfoto.png") {
        unlink("foto/" . $row['foto']);
    }

    $nama_foto = round(microtime(true)) . "." . $tipe;
    move_uploaded_file($file_tmp, "foto/" . $nama_foto);
    $query = "UPDATE tb_pegawai
                SET nama_pegawai = '$nama', email = '$email', foto = '$nama_foto', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis', bidang = '$bidang', minat = '$minat' 
                WHERE id_pegawai = '$id'";
}
mysqli_query($koneksi, $query);

header("location: pegawai.php");