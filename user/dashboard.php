<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: pl/index.php");
}
?>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <link href="css/icon.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
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
 <?php
  if(isset($_GET['r'])){
    $r=$_GET['r'];
  }
  else $r=1;
 ?>
 <script>
  $("document").ready(function(){
    r=parseInt(<?=$r?>)
    if(r==1)beranda(); 
    else if(r==2) info();
    else if(r==3) transaksi();
    else if(r==4) akun();
  })
  function beranda(){$(".utama").load("beranda.php");}
  function info(){$(".utama").load("info.php");}
  function transaksi(){$(".utama").load("transaksi.php");}
  function akun(){$(".utama").load("akun.php");}
 </script>
  <nav>
    <div class="nav-wrapper light-blue darken-2">
      <a href="#!" class="brand-logo">Nyari Hotel.com</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="?r=1">Beranda</a></li>
        <li><a href="?r=2">Informasi</a></li>
        <li><a href="?r=3">Transaksi</a></li>
        <li><a href="?r=4">Akun</a></li>
        <li><a href="../?keluar">Logout</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="?r=1">Beranda</a></li>
        <li><a href="?r=2">Informasi</a></li>
        <li><a href="?r=3">Transaksi</a></li>
        <li><a href="?r=4">Akun</a></li>
        <li><a href="../?keluar">Logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="col l10">
    <div class="utama"></div>
  </div>
</div>