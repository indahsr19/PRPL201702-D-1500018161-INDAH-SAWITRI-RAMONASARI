<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
}
?>
<?php
require 'koneksi.php';
$id_user= $_GET['id_user'];
?>
<?php include 'menu.php'; ?>

  <div class="col l10">
    <div class="utama">
      <form role="form" name="register" method="post" action="terimaedituser.php">
        <br>
         <td><input type="hidden" name="id_user" value="<?php echo $id_user;?>"/></td>
          <div align="center" class="row">
          <div class="input-field col s12 m4 center-on-small-only"><i class="mdi-action-account-circle prefix"></i>
          <td><input type="text" id="username" name="username" placeholder="Masukan username baru.."></td>
          <label style="color: black">Username Baru</label>
          </div>
         </div>
          <div align="center"  class="row">
          <div class="input-field col s12 m4 center-on-small-only"><i class="mdi-action-account-circle prefix"></i>
          <td><input type="password" id="passwordl" name="passwordl" placeholder="Masukan password lama.."></td>
          <label style="color: black;">Password Lama</label>
        </div>
        </div><div align="center"  class="row">
          <div class="input-field col s12 m4 center-on-small-only"><i class="mdi-action-account-circle prefix"></i>
          <td><input type="password" id="password" name="password" placeholder="Masukan password baru.."></td>
          <label style="color: black;">Password Baru</label>
        </div>
        </div>
        <div align="center"  class="row">
          <div class="input-field col s12 m4 center-on-small-only"><i class="mdi-action-account-circle prefix"></i>
          <td><input type="text" id="email" name="email" placeholder="Masukan email baru.."></td>
          <label style="color: black;">Email Baru</label>
        </div>
        </div>
        <div align="center"  class="row">
          <div class="input-field col s12 m4 center-on-small-only"><i class="mdi-action-account-circle prefix"></i>
          <td><input type="text" id="telepon" name="telepon" placeholder="Masukan telepon baru.."></td>
          <label style="color: black;">Telepon Baru</label>
        </div>
        </div>
         <div align="center" class="row">
          <div class="input-field col s12 m4 center-on-small-only">
          <td><button class="btn waves-effect waves- light-green darken-4" type ="submit" value="submit" >simpan</button></td>
         </div></div>
  </form></div>
  </div>
</div>
