<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: ../");
}
?>

<?php
require 'koneksi.php';
$baru = new Database();
$hasil = $baru->tampilkamar();

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
    <td>  Id Kamar </td>
    <td>  Tipe  </td>
    <td>  Nama Kamar  </td>
    <td>  Status  </td>
    <td>  Aksi </td>
    </tr></thead>
    <?php foreach ($hasil as $value): ?>
    <tr>
      <td><?php echo $value['idkamar'] ?></td>
      <td><?php echo $value['tipe'] ?></td>
      <td><?php echo $value['namakamar'] ?></td>
      <td><?php echo $value['status'] ?></td>
      <td><a href="deletekamar.php?idkamar=<?php echo $value['idkamar']?>"><button class="btn waves-effect waves- red darken-1">Hapus</button></a>
        <a href="editkamar.php?idkamar=<?php echo $value['idkamar']?>"><button class="btn waves-effect waves- green darken-1">Edit</button></a></td>
    </tr>
    <?php endforeach ?>
    </table>
      </div>

    </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
            <form  role="form" method="post" action="terimakamar.php">
    <div class="modal-content">
      <h4>Masukan Data kamar</h4>
      <p><div class="col s7">
            <table align="center">
            <tr>
            <td>Masukan tipe kamar</td>
            <td><input type="text" id="tipe" name="tipe"/></td>
            </tr>
            <tr>
            <td>Masukan nama kamar </td>
            <td><input type="text" id="namakamar" name="namakamar"/></td>
            </tr>
            <tr>
            <td>Masukan status kamar</td>
            <td><input type="text" id="status" name="status"/></td>
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