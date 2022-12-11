<?php
include 'koneksi.php';
$nama_faskes = $_POST['nama_faskes'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$latitude = $_POST['latitude'];
$longtitude = $_POST['longtitude'];

$query = "INSERT INTO faskes VALUES ('','$nama_faskes','$alamat','$telepon','$latitude','$longtitude')";
mysqli_query($koneksi, $query);

header("location: ../admin/master-data.php?pesan=input");
