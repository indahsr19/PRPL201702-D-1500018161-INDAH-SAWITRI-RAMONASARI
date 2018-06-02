  <!DOCTYPE html>
<html>
<head><title>Nyari Hotel.com</title> 

  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="css/icon.css" rel="stylesheet">
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
    <div class="nav-wrapper light-blue darken-2">
      <a href="#!" class="brand-logo">Nyari Hotel.com</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="dashboard.php">Beranda</a></li>
        <li><a href="infokmr.php">Informasi</a></li>
        <li><a href="transaksi.php">Transaksi</a></li>
        <li><a href="akun.php">Akun</a></li>
        <li><a href="../?keluar">Logout</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="dashboard.php">Beranda</a></li>
        <li><a href="infokmr.php">Informasi</a></li>
        <li><a href="transaksi.php">Transaksi</a></li>
        <li><a href="akun.php">Akun</a></li>
        <li><a href="../?keluar">Logout</a></li>
      </ul>
    </div>
  </nav>
