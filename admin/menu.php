  <!DOCTYPE html>
<html>
<head><title>Nyari Hotel.com</title> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="aset/css/materialize.min.css">
  <script src="aset/js/materialize.min.js"></script>
  
  <script>
    $("document").ready(function(){
      $(".button-collapse").sideNav();
      $(".tombolModal").click(function(){
      $(".tampilModal").modal();
      $('select').material_select();
    })
    });
  </script>
</head>

<nav>
    <div class="nav-wrapper light yellow darken-4">
      <a href="#!" class="brand-logo">Nyari Hotel.com</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="dashboard.php">Beranda</a></li>
        <li><a href="tampiluser.php">User</a></li>
        <li><a href="tampiladmin.php">Admin</a></li>
        <li><a href="tampilhotel.php">Hotel</a></li>
        <li><a href="tamilkamar.php">Kamar</a></li>
        <li><a href="tampiltransaksi.php">Transaksi</a></li>
        <li><a href="../?keluar">Logout</a></li>
      </ul>
    </div>
  </nav>
