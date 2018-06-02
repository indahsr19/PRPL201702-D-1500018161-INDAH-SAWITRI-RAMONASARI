<?php

require 'koneksi.php';
$x = new Database();

$idtransaksi = $_POST['idtransaksi'];
$total_harga = $_POST['total_harga'];

$x->updatetrans($idtransaksi, $total_harga);


?>