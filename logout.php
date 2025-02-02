<?php 
// hapus session
session_start();
session_unset();
session_destroy();

//hapus cookie
setcookie("id_admin", "", 0, '/');

header("location: index.php");
?>