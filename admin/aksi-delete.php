<?php
include_once 'koneksi.php';
$id_faskes = $_GET['id_faskes'];
$nama_faskes = $_POST['nama_faskes'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$q = "DELETE FROM faskes WHERE id_faskes = '$id_faskes' ";
mysqli_query($koneksi, $q);

header("location: ../admin/master-data.php?pesan=delete");
