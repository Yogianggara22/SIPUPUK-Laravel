<?php
session_start();
include('config.php');

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($query) == 1) {
    header('Location: ../resources/views');
    $users = mysqli_fetch_array($query);
    $_SESSION['nama'] = $users['Nama'];
    $_SESSION['level'] = $users['level'];

} else if ($username == '' || $password == '') {
    header('Location: ../index.php?error=2');
} else {
    header('Location: ../index.php?error=1');
}

?>