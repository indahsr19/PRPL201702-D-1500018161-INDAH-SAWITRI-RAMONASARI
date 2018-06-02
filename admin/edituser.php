<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
}
?>

<head>
<title>Form Edit User</title>
</head>
<body>
<?php include "menu.php";?>
<?php 
$id_user= $_GET['id_user'];
?>
<div class="col s9">
<h4 align="center">Edit Data User</h4>
<form action="terimaedituser.php" method="post">
<table align="center">
	<tr>
		<td><input type="hidden" name="id_user" value="<?php echo $id_user;?>"/></td>
	</tr>
		<tr>
		<td>Masukan username baru </td>
		<td><input type="text" name="username"/></td>
	</tr>
	<tr>
		<td>Masukan password baru</td>
		<td><input type="password" name="password"/></td>
	</tr>
	<tr>
		<td>Masukan email baru </td>
		<td><input type="text" name="email"/></td>
	</tr>
		<tr>
	<tr>
		<td>Masukan telepon baru </td>
		<td><input type="text" name="telepon"/></td>
	</tr>
		<tr>
		<td></td>
		<td><button class="btn waves-effect waves- blue darken-1" value="submit" name="submit">Simpan</button></td>
	</tr></table>
</form>
</div>

</body>
