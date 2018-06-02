<?php

require 'koneksi.php';
$x = new Database();

$id_user = $_POST['id_user'];
$username =  $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];

$x->updateuser($id_user, $username, $password, $email, $telepon);


?>