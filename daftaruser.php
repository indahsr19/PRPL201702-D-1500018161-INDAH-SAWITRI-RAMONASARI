<!DOCTYPE html>
<html>
<link rel="stylesheet" href="aset/css/materialize.min.css">
<script src="aset/js/jquery.js"></script>
<script src="aset/js/materialize.js"></script>

<script type="text/javascript">
function valregister(){
            var x=register.username.value;
            var x1=parseInt(x);
            if(register.username.value==""){
                        alert("Jumlah Orang masih kosong");
                        register.username.focus();
                        return false;      
            }if(isNaN(x1)==false){
                        alert("Username harus huruf");
                        register.username.focus();
                        return false;    
            }
            var y=register.email.value;
            if(y==""){
                  alert("asal Email masih kosong");
                  register.email.focus();
                  return false;
            }else{
            var atpos=y.indexOf("@");
            var dotpos=y.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length){
                        alert("asal Email Tidak Valid");
                        register.email.focus();
                        return false;
            }
            }
            var z=register.password.value;
            var panjang=z.length;
            if(register.password.value==""){
                        alert("Password masih kosong");
                        register.password.focus();
                        return false;
            } if(panjang<6 || panjang>8){
                        alert("Password minimum 6 karakter dan maksimum 8 karakter");
                        register.password.focus();
                        return false;
            }
             return true; 
}
</script>
<body>
<div class="card-panel light-blue darken-2">
  <h5 align="center" style="color: white"><b>Nyari Hotel.com</b></h5>
  <h6 align="center" style="color: white"><i>Temukan Penginapan Terbaikmu di Yogyakarta.. Membantu setiap istirahat Anda</i></h6></div>
  <div class="col l10">
    <div class="utama">
      <form role="form" name="register" method="post" onSubmit="return valregister()" action="terimauser.php" >
        <div align="center" class="row center">
          <div class="input-field col s12 m4 center-on-small-only">
          <i class="mdi-action-account-circle prefix"></i>
          <h6><b>Form Pendaftaran</b></h6>
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
        <div align="center"  class="row">
          <div class="input-field col s12 m4 center-on-small-only"><i class="mdi-action-account-circle prefix"></i>
          <td><input type="text" id="email" name="email" placeholder="Masukan email.."></td>
          <label style="color: black;">Email</label>
        </div>
        </div>
        <div align="center"  class="row">
          <div class="input-field col s12 m4 center-on-small-only"><i class="mdi-action-account-circle prefix"></i>
          <td><input type="text" id="telepon" name="telepon" placeholder="Masukan telepon.."></td>
          <label style="color: black;">Telepon</label>
        </div></div>
         <div align="center" class="row">
          <div class="input-field col s12 m4 center-on-small-only">
          <td><button class="btn waves-effect waves- light-green darken-4" type ="submit" value="submit" name="cek">daftar</button></td>
         </div></div>
  </form></div>
  </div>
</div>

</body>
</html>