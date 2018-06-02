<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
}
?>
<?php
require 'koneksi.php';
$baru = new Database();
$hasil = $baru->tampiltrans();
?>

  <div class="col l10" align="center">
  <div class="input-field col s12 m4 center-on-small-only">
  <img src="aset/trans.png" alt="" class="circle"><i class="mdi-action-account-circle prefix"></i>
  </div>
  <b>Transaksi Saya</b>
  <div class="utama">
  <table class="tabel" border="1px" align="center">
    <tr><?php foreach ($hasil as $value): ?>
    <tr>
      <td>Kode Transaksi</td>
      <td><h5 style="color: green"><b><?php echo $value['idtransaksi'] ?></b></h5></td>
    </tr>
    <tr>
      <td></td>
      <td><b><?php echo "<b>Id Pengguna </b>".$value['id_user'] ?></b></td>
    </tr> 
    <tr>
      <td></td>
      <td><b><?php echo "<b>Kamar </b>".$value['namakamar'] ?></b></td>
    </tr>    
    <tr>
      <td></td>
      <td><?php echo "<b>Tanggal Check in </b>".$value['tgl_checkin'] ?></td>
    </tr> 
    <tr>
      <td></td>
      <td><?php echo "<b>Tanggal Check out </b>".$value['tgl_checkout'] ?></td>
    </tr>
    <tr>
      <td></td>
      <td><?php echo "<b>Total Biaya Inap </b>".$value['total_harga'] ?></td>
    </tr>    
    <tr><td></td>
    <td>
      <a href="hapustrans.php?idtransaksi=<?php echo $value['idtransaksi']?>"><button class="btn waves-effect waves- red darken-4">hapus</button></a> 
      <a href="cetaktrans.php?idtransaksi=<?php echo $value['idtransaksi']?>"><button class="btn waves-effect waves- blue darken-4">cetak struk</button></a></td>
    </tr>
    <?php endforeach ?>
    </table>
    </div>
</body>
</html>