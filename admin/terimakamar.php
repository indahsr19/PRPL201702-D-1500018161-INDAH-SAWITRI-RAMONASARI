<?php

$tipe = $_POST['tipe'];
$namakamar = $_POST['namakamar'];
$status = $_POST['status'];

require'koneksi.php';

$baru = new Database();
$baru->masukkamar($tipe, $namakamar, $status); 
?>