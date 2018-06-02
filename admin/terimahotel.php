<?php

$kategori = $_POST['kategori'];
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$harga = $_POST['harga'];

require'koneksi.php';

$baru = new Database();
$baru->masukhotel($kategori, $nama, $asal, $harga); // untuk input data sesuai dng variabel yang dideklarasikan

?>