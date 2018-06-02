<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: pl/index.php");
}
?>
<?php
require 'koneksi.php'; 
$baru = new Database();
$hasil = $baru->tampiluser();
?>
<br>
  
  <div class="col l10" align="center">
  <div class="input-field col s12 m4 center-on-small-only">
  <img src="aset/useric.png" alt="" class="circle">
  <i class="mdi-action-account-circle prefix"></i>
  </div>
  <br><b>Akun Saya</b><br>
    <table class="tabel" border="1px" align="center">
    <tr><?php foreach ($hasil as $value): ?>
    <tr>
      <td>Id User</td>
      <td><?php echo $value['id_user'] ?></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><?php echo $value['username'] ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $value['email'] ?></td>
    </tr>
      <tr>
      <td>Telepon</td>
      <td><?php echo $value['telepon'] ?></td>
    </tr>
    <tr><td></td>
    <td><a href="edituser.php?id_user=<?php echo $value['id_user']?>">Ubah Profil dan Password</a></td>
    </tr>
    <?php endforeach ?>
    </table>
    </div>
    </div>