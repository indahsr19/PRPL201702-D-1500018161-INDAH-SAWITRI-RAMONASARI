<?php
require 'koneksi.php';
$baru = new Database();
@$kunci = $_POST['key'];
@$btn_cari = $_POST['cari'];
if(isset($kunci)){
  $hasil = $baru->carihotel($kunci);
}else{
  $hasil = $baru->tampilhotel();
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
<?php include 'menu.php' ?>
  <form action="" method="post">
  <div class="col l10" align="center">
    <input type="text" style="width:50%; max-width: 50%; max-height: 50%" name="key" placeholder="Masukan nama hotel..">
    </input><br>
    <button class="btn waves-effect waves- light blue darken-2" type="submit" name="cari" value="search">Cari</button>
    </div></form>
    <br>
    <table class="tabel" border="1px" align="center" id="idhotel">
    <tr><?php foreach ($hasil as $value): ?>
    <td><br><b><?php echo $value['nama'] ?></b></td>
    </tr>
    <tr>
    <td><?php echo $value['asal'] ?></td>
    </tr>
    <tr>
    <td>Mulai Dari <b>Rp. <?php echo $value['harga'] ?></b></td>
    </tr>
    <tr>
    <td><a href="pesan.php?idhotel=<?php echo $value['idhotel']?>" class="btn waves-effect waves- light yellow darken-4">pesan</a></td>
    </tr>
    <?php endforeach ?>
    </table><br>
    <div class="col l10" align="center">
    <ul class="pagination">
    <li class="disabled"><a href="#"><i class="material-icons">chevron_left</i></a></li>
    <li class="waves-effect light blue darken-2 active"><a href="#">1</a></li>
    <li class="waves-effect light blue darken-2"><a href="#" style="color: white">2</a></li>
    <li class="waves-effect light blue darken-2"><a href="#" style="color: white">3</a></li>
    <li class="waves-effect light blue darken-2"><a href="#" style="color: white">4</a></li>
    <li class="waves-effect light blue darken-2"><a href="#" style="color: white">5</a></li>
    <li class="waves-effect "><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul></div>
    </div>
    </div>