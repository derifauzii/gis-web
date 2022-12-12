<?php
include_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location: ../admin/master-data.php");
} else {
    echo '<script type="text/javascript">';
    echo 'alert("Username dan Password tidak sesuai")';
    echo '</script>';
    header("location:index.php");
}
