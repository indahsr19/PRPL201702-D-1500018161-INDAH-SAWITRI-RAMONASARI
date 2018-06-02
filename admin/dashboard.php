<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: pl/index.php");
}
?>

<link rel='stylesheet' type='text/css' href='aset/css/materialize.min.css'>
<script src='aset/js/jquery.js'></script>
<script src='aset/js/materialize.min.js'></script>
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
    else if(r==2) user();
    else if(r==3) admin();
    else if(r==4) hotel();
    else if(r==5) kamar();
    else if(r==6) transaksi();
    else if(r==7) logout();
  })
  function beranda(){$(".utama").load("beranda.php");}
  function user(){$(".utama").load("tampiluser.php");}
  function admin(){$(".utama").load("tampiladmin.php");}
  function hotel(){$(".utama").load("tampilhotel.php");}
  function kamar(){$(".utama").load("tampilkamar.php");}
  function transaksi(){$(".utama").load("tampiltransaksi.php");}
 </script>
  <nav>
    <div class="nav-wrapper light yellow darken-4">
      <a href="#!" class="brand-logo">Nyari Hotel.com</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="?r=1">Beranda</a></li>
        <li><a href="?r=2">User</a></li>
        <li><a href="?r=3">Admin</a></li>
        <li><a href="?r=4">Hotel</a></li>
        <li><a href="?r=5">Kamar</a></li>
        <li><a href="?r=6">Transaksi</a></li>
        <li><a href="../?keluar">Logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="col l10">
    <div class="utama"></div>
  </div>
</div>