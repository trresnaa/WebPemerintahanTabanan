<?php
session_start();
include "koneksi.php";
cekSession();
cekCookies();
?>
<?php


$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT * FROM tb_admin WHERE email = '$email' AND password = '$password'";
$data = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($data);

$count = mysqli_num_rows($data);

if ($count == 0) {
  header("location: index.php?pesan=notfound");
} else {
  $_SESSION = array(
    'id_admin' => $row['id_admin'],
    'email' => $row['email'],
    'level' => $row['level']
  );

  $expired = time() + 60 * 60;
  setcookie("id_admin", $row['id_admin'], $expired, '/');

  header("location: berandapemerintahan.php");
}
?>