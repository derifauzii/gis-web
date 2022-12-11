<?php
include_once 'koneksi.php';
//$id = $_GET['id_faskes'];
$nama_faskes = $_POST['nama_faskes'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$latitude = $_POST['latitude'];
$longtitude = $_POST['longtitude'];

$query = "INSERT INTO faskes (id_faskes,nama_faskes,alamat,telepon,latitude,longitude) VALUES (NULL,'$nama_faskes','$alamat','$telepon','$latitude','$longtitude')";
mysqli_query($koneksi, $query);

header("location: ../admin/master-data.php?pesan=input");
