<?php
include_once 'koneksi.php';
$id_faskes = $_POST['id_faskes'];
$nama_faskes = $_POST['nama_faskes'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$qr = "UPDATE faskes SET nama_faskes= '$nama_faskes', alamat= '$alamat', telepon= '$telepon', latitude= '$latitude', longitude= '$longitude' where id_faskes = '$id_faskes' ";
mysqli_query($koneksi, $qr);

header("location: ../admin/master-data.php?pesan=edit");
