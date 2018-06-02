<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: pl/index.php");
} 
?>
<?php
require 'koneksi.php';
$baru = new Database();
$hasil = $baru->tampiltrans2();
$hasil1 = $baru->tampiltipe();

$idtransaksi= $_GET['idtransaksi'];
?>
<script src="jquery.js"></script>
<script>
    $("document").ready(function(){
    $("#idtipe").change(function(){
      kode=$("#idtipe").val();
      $.ajax({
        url:"auto.php",
        data:"kodes="+kode,
        success:function(hasil3){
          $("#denda").val(hasil3);
          $("#total_harga").val(parseInt($("#denda").val()) + parseInt($("#harga").val()))
        }
      })
    })
  })
</script>

<?php include 'menu.php'; ?>

  <div class="col l10" align="center">
  <div class="utama">
  <form role="form"  method="post" action="terimaedittrans.php">
        <br>
        <input type="hidden" name="idtransaksi" value="<?php echo $idtransaksi;?>"/>
        <b>BIAYA SEBELUMNYA</b><br>
        <input style="text-align: center; width:10%; max-width: 10%; max-height: 10%;color: black;" type="text" disabled="" name="harga" id="harga" value="<?php foreach ($hasil as $value): ?><?php echo "{$value['total_harga']}" ?><?php endforeach ?>"/>

        <select  style="width:15%; max-width: 15%; max-height: 15%" class="browser-default" name="idtipe" id="idtipe">
        <option id="pilih" value="pilih"><b>Tipe Kamar Yang Digunakan</b></option>
        <?php foreach ($hasil1 as $value1): ?>
        <?php echo "<option value='{$value1['idtipe']}'>{$value1['namatipe']}</option>" ?>
        <?php endforeach ?>
        </select>
        <br>

        <b>BIAYA TAMBAHAN INAP SATU HARI</b><br>
        <b><input type="text" style="text-align: center; width:10%; max-width: 10%; max-height: 10% ;color: black;" disabled="" name="denda" id="denda"></b><br>
        <input type="hidden" name="total_harga" id="total_harga"/><br>
        
        <button class="btn waves-effect waves- light-green darken-4" type ="submit" value="submit" >simpan</button>
  </form>
  </div></div>
