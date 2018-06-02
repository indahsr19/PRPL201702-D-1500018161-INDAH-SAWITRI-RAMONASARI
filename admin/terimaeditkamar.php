<?php

require 'koneksi.php';
$x = new Database();

$idkamar = $_POST['idkamar'];
$tipe =  $_POST['tipe'];
$namakamar = $_POST['namakamar'];
$status = $_POST['status'];

$x->updatekamar($idkamar, $tipe, $namakamar, $status);


?>