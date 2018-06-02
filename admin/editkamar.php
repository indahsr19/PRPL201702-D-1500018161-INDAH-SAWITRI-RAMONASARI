<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
}
?>

<head>
<title>Form Edit kamar</title>
</head>
<body>
<?php include "menu.php";?>
<?php 
$idkamar= $_GET['idkamar'];
?>
<div class="col s9">
<h4 align="center">Edit Data kamar</h4>
<form action="terimaeditkamar.php" method="post">
<table align="center">
	<tr>
		<td><input type="hidden" name="idkamar" value="<?php echo $idkamar;?>"/></td>
	</tr>
		<tr>
		<td>Masukan tipe kamar baru</td>
		<td><input type="text" name="tipe"/></td>
	</tr>
	<tr>
		<td>Masukan nama kamar baru</td>
		<td><input type="text" name="namakamar"/></td>
	</tr>
	<tr>
		<td>Masukan status kamar baru </td>
		<td><input type="text" name="status"/></td>
	</tr>
		<tr>
		<td></td>
		<td><button class="btn waves-effect waves- blue darken-1" value="submit" name="submit">Simpan</button></td>
	</tr></table>
</form>
</div>

</body>
