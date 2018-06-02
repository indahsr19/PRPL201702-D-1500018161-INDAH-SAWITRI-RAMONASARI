<?php
require 'koneksi.php';
$baru = new Database();
@$kunci = $_POST['key'];
@$btn_cari = $_POST['cari'];
if(isset($kunci)){
  $hasil = $baru->tampilsewa($kunci);
}else{
  $hasil = $baru->tampiltrans();
}
?>
<link rel="stylesheet" href="aset/css/data_tables.css">
<script src="aset/js/data_tables.js"></script>
<script>
    $("document").ready(function(){
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
      });
    })
</script>
<script>
  $("document").ready(function(){
    $('select').material_select();
    $(".tabel").DataTable();
    $(".modal").modal();
  })
</script>
<?php include 'menu.php' ?>
  <form action="" method="post">
  <div class="col l10" align="center">
    <input type="text" class="datepicker" style="width:50%; max-width: 50%; max-height: 50%" name="key" placeholder="Pilih Tanggal Check in yang dicari">
    </input><br>
    <button class="btn waves-effect waves- light blue darken-2" type="submit" name="cari" value="search">Cari</button>
    </div></form>
    <br>
    <div class="col l10">
    <table class="tabel" border="1px" align="center">
    <tr><?php foreach ($hasil as $value): ?>
    <tr>
      <td><br><b><?php echo "Transaksi ".$value['idtransaksi'] ?></b></td>
    </tr>
    <tr>
      <td><?php echo "Kamar ".$value['namakamar'] ?></td>
    </tr>
    <tr>
      <td><?php echo "Status Kamar ".$value['status'] ?></td>
    </tr>
      <tr>
      <td><?php echo "Total Harga ".$value['total_harga'] ?></td>
    </tr>
    <tr>
      <td><?php echo "Sisa Waktu Inap ".$value['sisa_waktu'] ?></td>
    </tr>
    <?php endforeach ?>
    </table>
    </div>
    </div>