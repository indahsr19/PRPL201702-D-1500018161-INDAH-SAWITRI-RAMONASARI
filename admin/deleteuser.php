<?php

require 'koneksi.php';
$new = new Database();

$id_user = $_GET['id_user'];

$new->deleteuser($id_user);

?>