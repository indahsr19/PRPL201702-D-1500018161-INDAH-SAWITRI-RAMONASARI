<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];

require'koneksi.php';

$baru = new Database();
$baru->masukuser($username, $password, $email, $telepon); // untuk input data sesuai dng variabel yang dideklarasikan

?>