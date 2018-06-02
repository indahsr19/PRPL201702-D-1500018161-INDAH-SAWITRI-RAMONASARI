<?php

require 'koneksi.php';
$new = new Database();

$idtransaksi = $_GET['idtransaksi'];

$new->deletetrans($idtransaksi);

?>