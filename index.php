<?php
session_start();
if(isset($_GET['keluar'])){ 
  session_destroy(); // menghapus sessions untuk logout
  session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="aset/css/materialize.min.css">
  <script src="aset/js/jquery.js"></script>
  <script src="aset/js/materialize.min.js"></script>
</head>
<script type="text/javascript">
function valregister(){
            var x=register.username.value;
            var x1=parseInt(x);
            var panjang=x.length;
            if(register.username.value==""){
                        alert("Username belum diisi");
                        register.username.focus();
                        return false;      
            }
            if(panjang < 4){
                        alert("Username tidak boleh kurang dari 4 huruf");
                        register.username.focus();
                        return false;      
            }
            if(isNaN(x1)==false){
                        alert("Username harus huruf");
                        register.username.focus();
                        return false;

            }

            var z=register.password.value;
            var panjang1=z.length;
            if(register.password.value==""){
                        alert("Password masih kosong");
                        register.password.focus();
                        return false;
            }
            if(panjang1 <5){
                        alert("Password tidak boleh kurang dari 5 huruf ");
                        register.password.focus();
                        return false;      
            }
}
</script>
<div class="card-panel light-blue darken-2">
  <h5 align="center" style="color: white"><b>Nyari Hotel.com</b></h5>
  <h6 align="center" style="color: white"><i>Temukan Penginapan Terbaikmu di Yogyakarta.. Membantu setiap istirahat Anda</i></h6></div>
<div class="col l10" align="center">
  <div class="utama">
      <form role="form" name="register" method="post" onSubmit="return valregister()" action="login.php">
        <br>
         <div align="center" class="row">
          <div class="input-field col s12 m4 center-on-small-only">
          <img src="aset/admin.png" alt="" class="circle"><i class="mdi-action-account-circle prefix"></i>
          </div>
         </div>
          <div align="center" class="row">
          <div class="input-field col s12 m4 center-on-small-only"><i class="mdi-action-account-circle prefix"></i>
          <td><input type="text" id="username" name="username" placeholder="Masukan username.."></td>
          <label style="color: black">Username</label>
          </div>
         </div>
         <div align="center"  class="row">
          <div class="input-field col s12 m4 center-on-small-only"><i class="mdi-action-account-circle prefix"></i>
          <td><input type="password" id="password" name="password" placeholder="Masukan password.."></td>
          <label style="color: black;">Password</label>
        </div>
        </div>
        
         <div align="center" class="row">
          <div class="input-field col s12 m4 center-on-small-only">
          <td><button class="btn waves-effect waves- light-blue darken-4" type ="submit" value="submit" name="cek">masuk</button></td>
        </div>
        </div>
          <div align="center" class="row">
          <div class="input-field col s12 m4 center-on-small-only">
          <i class="mdi-action-account-circle prefix"></i>
          <h6>Belum punya akun?? </h6><a href="daftaruser.php">Daftar</a>
          </div>
         </div>
  </form></div>
  </div>
</div></html>
