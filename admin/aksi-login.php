<?php
include_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
header("location: ../admin/master-data.php");
