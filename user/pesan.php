<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
}
?>
<?php
require 'koneksi.php';
$baru = new Database();
$hasil = $baru->tampiluser();
$hasil1 = $baru->tampilkategori();
$hasil2 = $baru->tampilhotel();
$hasil3 = $baru->tampiltipe();
$hasil4 = $baru->tampilhotel2();
$hasil5 = $baru->tampilkamar();

$idhotel= $_GET['idhotel'];
?>

<link rel="stylesheet" href="aset/css/materialize.css">
<script src="aset/js/jquery.js"></script>
<script src="aset/js/materialize.js"></script>
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
<script src="jquery.js"></script>
<script>
    $("document").ready(function(){
    $("#idtipe").change(function(){
      kode1=$("#idtipe").val();
      $.ajax({
        url:"auto.php",
        data:"kodes1="+kode1,
        success:function(hasil3){
          $("#tambah").val(hasil3);
          $("#total_harga").val(parseInt($("#harga").val())+parseInt($("#tambah").val()))
        }
      })
    })

    $("#idtipe").change(function(){
      kode2=$("#idtipe").val();
      $.ajax({
        url:"auto.php",
        data:"kodes2="+kode2,
        success:function(hasil){$("#idkamar").html(hasil);}
      })
    })

    $('select').material_select();
    $(".tabel").DataTable();
    $(".modal").modal();
  })
</script>
<?php include'menu.php'; ?>

  <div class="col l10" align="center">
  <div class="utama">
  <form role="form" name="register" method="post" onSubmit="return valregister()" action="terimatrans.php">

          <input type="hidden" name="idhotel" value="<?php echo $idhotel;?>"/>
          <b><input style="text-align: center; width:38%; max-width: 38%; max-height: 38%; color: black;" type="text" disabled="" name="nama" id="nama" value="<?php foreach ($hasil4 as $value4):?><?php echo "{$value4['nama']}" ?><?php endforeach ?>"/></b><br>
          <input style="text-align: center; width:10%; max-width: 10%; max-height: 10%;color: black;" type="text" disabled="" name="harga" id="harga" value="<?php foreach ($hasil4 as $value4): ?><?php echo "{$value4['harga']}" ?><?php endforeach ?>"/>
        
        <br><label style="color: red"><b>*Seluruh form wajib diisi</b></label>
        <br><b>
        Tanggal Check In</b><br>
        <input type="text" class="datepicker" name="tgl_checkin" id="tgl_checkin" style="text-align: center; width:38%; max-width: 38%; max-height: 38%">
        <br>

        <b>Tanggal Check Out</b><br>
        <input type="text" class="datepicker"  name="tgl_checkout" id="tgl_checkin" style="text-align: center; width:38%; max-width: 38%; max-height: 38%">

        <select style="text-align: center; width:38%; max-width: 38%; max-height: 38%" class="browser-default" id="jumlah_orang" name="jumlah_orang">
        <option id="pilih2" value="pilih2"><b>Jumlah Orang</b></option>
        <option id="1" value="1">1</option>
        <option id="2" value="2">2</option>
        <option id="3" value="3">3</option>
        <option id="4" value="4">4</option>
        </select><br><br>

          <select  style="text-align: center; width:38%; max-width: 38%; max-height: 38%" class="browser-default" name="idtipe" id="idtipe">
          <option id="pilih3" value="pilih3"><b>Pilih Tipe Kamar</b></option>
          <?php foreach ($hasil3 as $value3): ?>
          <?php echo "<option value='{$value3['idtipe']}'>{$value3['namatipe']}</option>" ?>
          <?php endforeach ?>
          </select>
        <label style="color: red"><b>Anda dikenakan biaya tambahan berdasarkan fasilitas kamar yang anda pilih sebesar</b></label><br><input type="text" style="text-align: center; width:10%; max-width: 10%; max-height: 10% ;color: black;" disabled="" name="tambah" id="tambah"></b>
        <input type="hidden" name="total_harga" id="total_harga"/><br>


        <select  style="text-align: center; width:50%; max-width:50%; max-height:50%" class="browser-default" name="idkamar" id="idkamar">
        <option id="pilih4" value="pilih4"><b>Kamar Yang Tersedia</b></option>
        <?php foreach ($hasil5 as $value5): ?>
        <?php echo "<option value='{$value5['idkamar']}'>{$value5['namakamar']}</option>" ?>
        <?php endforeach ?>
        </select>
        <label style="color: red"><b>*Tiap kamar memiliki fasilitas sama sesuai tipe</b></label><br>
        <label style="color: red"><b>*Jika tidak ada opsi maka kamar penuh</b></label><br><br>
         
        <button class="btn waves-effect waves- light-green darken-4" type ="submit" value="submit">setuju dan lanjutkan</button>

</form>
</body>
</html>