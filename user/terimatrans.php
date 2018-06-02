<?php
session_start();
$id_user = $_SESSION['username'];

$con=new mysqli("localhost","root","","pr");
$q=$con->query("select id_user from user where username='$id_user'");
$id_user=mysqli_fetch_array($q)['id_user'];
$idhotel = $_POST['idhotel'];
$idkamar = $_POST['idkamar'];
$jumlah_orang= $_POST['jumlah_orang'];
$tgl_checkin = $_POST['tgl_checkin'];
$tgl_checkout = $_POST['tgl_checkout'];
$total_harga = $_POST['total_harga'];

require'koneksi.php';

$baru = new Database();
$baru->masuktrans($id_user, $idhotel, $idkamar, $jumlah_orang, $tgl_checkin, $tgl_checkout, $total_harga);
?>
