<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
}
?>

<head>
<title>Form Edit hotel</title>
</head>
<body>
<?php include "menu.php";?>
<?php 
$idhotel= $_GET['idhotel'];
?>
<div class="col s9">
<h4 align="center">Edit Data hotel</h4>
<form action="terimaedithotel.php" method="post">
<table align="center">
	<tr>
		<td><input type="hidden" name="idhotel" value="<?php echo $idhotel;?>"/></td>
	</tr>
		<tr>
		<td>Masukan kategori hotel baru</td>
		<td><input type="text" name="kategori"/></td>
	</tr>
	<tr>
		<td>Masukan nama hotel baru</td>
		<td><input type="text" name="nama"/></td>
	</tr>
	<tr>
		<td>Masukan alamat hotel baru </td>
		<td><input type="text" name="asal"/></td>
	</tr>
		<tr>
	<tr>
		<td>Masukan tarif dasar hotel baru</td>
		<td><input type="text" name="harga"/></td>
	</tr>
		<tr>
		<td></td>
		<td><button class="btn waves-effect waves- blue darken-1" value="submit" name="submit">Simpan</button></td>
	</tr></table>
</form>
</div>

</body>
