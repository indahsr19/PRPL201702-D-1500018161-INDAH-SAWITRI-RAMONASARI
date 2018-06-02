<?php

require 'koneksi.php';
$x = new Database();

$idhotel = $_POST['idhotel'];
$kategori =  $_POST['kategori'];
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$harga = $_POST['harga'];

$x->updatehotel($idhotel, $kategori, $nama, $asal, $harga);


?>