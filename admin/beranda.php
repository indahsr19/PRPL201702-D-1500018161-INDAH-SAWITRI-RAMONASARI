<?php
require 'koneksi.php';
$baru = new Database();
@$kunci = $_POST['key'];
@$btn_cari = $_POST['cari'];
if(isset($kunci)){
  $hasil = $baru->carihotel($kunci);
}else{
  $hasil = $baru->tampilhotel();
  $hasil1 = $baru->tampilkategori();
}
?>
<link rel="stylesheet" href="aset/css/data_tables.css">
<script src="aset/js/data_tables.js"></script>
<script>
  $("document").ready(function(){
    $('select').material_select();
    $(".tabel").DataTable();
    $(".modal").modal();
  })
</script>

    <br>
    <div class="col l10" align="center">
    <div align="center" class="row">
    <div class="input-field col s12 m4 center-on-small-only">
    <img src="aset/carilaporan.png" alt="" class="circle"><i class="mdi-action-account-circle prefix"></i>
    </div></div>
    <div align="center" class="row"><div class="input-field col s12 m4 center-on-small-only">
    <b>Cari Transaksi Penginapan Berdasarkan Filter Tanggal</b><br><br>
    <a href="tampilsewa.php" class="btn waves-effect waves- light yellow darken-4">Lanjut</a><br><br><br>
    </div></div>
    <div align="center" class="row"><div class="input-field col s12 m4 center-on-small-only">
    <img src="aset/laporan.png" alt="" class="circle"><i class="mdi-action-account-circle prefix"></i>
    </div></div>
    <div align="center" class="row"><div class="input-field col s12 m4 center-on-small-only">
    <b>Tampilkan Laporan Transaksi Penginapan</b><br><br>
    <a href="cetaklaporan.php" class="btn waves-effect waves- light yellow darken-4">Lanjut</a>
    </div></div></div>
    </div>