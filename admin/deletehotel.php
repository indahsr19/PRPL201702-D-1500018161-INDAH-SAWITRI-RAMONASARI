<?php

require 'koneksi.php';
$new = new Database();

$idhotel= $_GET['idhotel'];

$new->deletehotel($idhotel);

?>