    <?php
    session_start();
    include "koneksi.php";
    cekSession();
    cekCookies();
    levelAdmin();

    $id = $_POST['id'];
    $email = $_POST['email'];
    $password1 = md5($_POST['password1']);
    $level = $_POST ['level'];


    $query = "UPDATE tb_admin
            SET email = '$email',
                password = '$password1',
                level = '$level'
            WHERE id_admin = '$id'";
    mysqli_query($koneksi, $query);

    header('location: admin.php');
    ?>