<?php
require 'koneksi.php';
$baru = new Database();
  $hasil = $baru->tampilhotel();
  $hasil1 = $baru->tampilkategori();
?>
  <link rel="stylesheet" href="aset/css/data_tables.css">
  <script src="aset/js/data_tables.js"></script>
<script>
  $("document").ready(function(){
    $("#id").change(function(){
      idKota=$("#id").val();
      $.ajax({
        url:"auto.php",
        data:"idKota="+idKota,
        success:function(hasil){$("#idhotel").html(hasil);}
      })
    })
    $('select').material_select();
    $(".tabel").DataTable();
    $(".modal").modal();
  })
</script>
    <br>
    <div class="col l10" align="center">
    <div class="input-field col s12 m4 center-on-small-only">
    <img src="aset/carihotel.jpeg" alt="" class="circle"><i class="mdi-action-account-circle prefix"></i>
    </div>
    <br><a href="temukanhotel.php" class="btn waves-effect waves- light blue darken-2">temukan hotel</a><br><br><br>
    <b>Atau Tampilkan Daftar Hotel Berdasarkan Daerah</b>
    <select  style="width:50%; max-width:50%; max-height:50%" class="browser-default" name="id" id="id">
    <option id="pilih" value="pilih"><b>Pilih Tujuan Penginapan</b></option>
    <?php foreach ($hasil1 as $value1): ?>
    <?php echo "<option value='{$value1['id']}'>{$value1['nama']}</option>" ?>
    <?php endforeach ?>
    </select>
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