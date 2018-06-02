<?php

require 'koneksi.php';
$new = new Database();

$idkamar= $_GET['idkamar'];

$new->deletekamar($idkamar);

?>