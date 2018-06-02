<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../");
}
?>

<?php
require 'koneksi.php';
$baru = new Database();
$hasil = $baru->tampilhotel();

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
    <a href="#modal1" class="btn btn-floating btn-large cyan pulse modal-trigger"><i class="material-icons">+</i></a>

    <br><br><div class="col s9">
    <table class="tabel" border="1px" align="center">
    <thead><tr>
    <td>  Id Hotel </td>
    <td>  Nama Hotel  </td>
    <td>  Alamat  </td>
    <td>  Tarif Standar  </td>
    <td>  Aksi </td>
    </tr></thead>
    <?php foreach ($hasil as $value): ?>
    <tr>
      <td><?php echo $value['idhotel'] ?></td>
      <td><?php echo $value['nama'] ?></td>
      <td><?php echo $value['asal'] ?></td>
      <td><?php echo $value['harga'] ?></td>
      <td><a href="deletehotel.php?idhotel=<?php echo $value['idhotel']?>"><button class="btn waves-effect waves- red darken-1">Hapus</button></a>
        <a href="edithotel.php?idhotel=<?php echo $value['idhotel']?>"><button class="btn waves-effect waves- green darken-1">Edit</button></a></td>
    </tr>
    <?php endforeach ?>
    </table>
      </div>

    </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
            <form  role="form" method="post" action="terimahotel.php">
    <div class="modal-content">
      <h4>Masukan Data Hotel</h4>
      <p><div class="col s7">
            <table align="center">
            <tr>
            <td>Masukan kategori hotel</td>
            <td><input type="text" id="kategori" name="kategori"/></td>
            </tr>
            <tr>
            <td>Masukan nama hotel </td>
            <td><input type="text" id="nama" name="nama"/></td>
            </tr>
            <tr>
            <td>Masukan alamat hotel</td>
            <td><input type="text" id="asal" name="asal"/></td>
            </tr>
            <tr>
            <td>Masukan tarif dasar </td>
            <td><input type="text" id="harga" name="harga"/></td>
            </tr>
            </table>
      </div></p>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn waves-effect waves- blue darken-1">simpan</button>
    </div>
    </form>
  </div>

</body>
</html>