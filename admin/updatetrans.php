<?php
session_start();
$id_user = $_SESSION['username'];

$idtrans=$_POST['idtrans'];
$con=new mysqli("localhost","root","","pr");
$q=$con->query("select id_user from user where username='$id_user'");
$id_user=mysqli_fetch_array($q)['id_user'];
$idhotel = $_POST['idhotel'];
$asalkb = $_POST['asalkb'];
$halte = $_POST['halte'];
$rute = $_POST['rute'];
$tgl = $_POST['tgl'];
$idtipe = $_POST['idtipe'];
$total_harga = $_POST['total_harga'];
$keterangan = $_POST['keterangan'];

require'koneksi.php';

$baru = new Database();
$baru->updatetrans($idtrans, $id_user, $idhotel, $asalkb, $halte, $rute, $tgl, $idtipe, $total_harga, $keterangan); // untuk input data sesuai dng variabel yang dideklarasikan
?>