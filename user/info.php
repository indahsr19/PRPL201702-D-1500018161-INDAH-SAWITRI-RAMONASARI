<?php
require 'koneksi.php';
$baru = new Database();
$hasil = $baru->tampiltipe();
?>
  <link rel="stylesheet" href="aset/css/data_tables.css">
  <script src="aset/js/data_tables.js"></script>
<script>
  $("document").ready(function(){
    $("#id").change(function(){
      idtp=$("#id").val();
      $.ajax({
        url:"auto.php",
        data:"idtp="+idtp,
        success:function(hasil){$("#idtipe").html(hasil);}
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
    <img src="aset/hotel.png" alt="" class="circle"><i class="mdi-action-account-circle prefix"></i>
    </div>
    <div class="col l10" align="center"><br><b>Informasi Fasilitas Tipe Hotel</b>
    <select  style="width:50%; max-width:50%; max-height:50%" class="browser-default" name="id" id="id">
    <option id="pilih" value="pilih"><b>Pilih Tipe Hotel</b></option>
    <?php foreach ($hasil as $value): ?>
    <?php echo "<option value='{$value['idtipe']}'>{$value['namatipe']}</option>" ?>
    <?php endforeach ?>
    </select>
    
    <table class="tabel" border="1px" align="center" id="idtipe">
    <tr><?php foreach ($hasil as $value): ?>
    <td><br><br><b><?php echo $value['namatipe'] ?></b></td>
    </tr>
    <tr>
    <td>Fasilitas <?php echo $value['fasilitas'] ?></td>
    </tr>
    <tr>
    <td>Biaya Tambahan dari Tarif Standar <b>Rp. <?php echo $value['tambah'] ?></b></td>
    </tr>
      <?php endforeach ?>
    </table>

</div>