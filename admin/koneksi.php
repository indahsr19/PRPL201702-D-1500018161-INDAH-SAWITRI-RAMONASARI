<link rel='stylesheet' type='text/css' href='aset/css/materialize.min.css'>
<script src='aset/js/jquery.js'></script>
<script src='aset/js/materialize.min.js'></script>
<?php
class Database{
	function __construct(){
		$this->db = new mysqli("localhost","root","","pr");

	}

	public function masukadmin($username, $password){ 
	$sql="insert into admin (username, password) values ('$username', '$password' )";
	$query = $this->db->query($sql);
	if($query){
		include 'menu.php';
	echo "<br>Berhasil</br>";
	}else{
		echo "input admin gagal</br>";
		echo"<br/>".$this->db->error;
	}
	}

	public function tampiladmin(){ 
		$query = "select * from admin";
		$sql = $this->db->query($query);
		$data = array();
		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
	}


	public function deleteadmin($idadmin){
		$query = "delete from admin where idadmin=$idadmin";
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "<h5 align='center'><b>Hapus data admin berhasil</b></h5>";
		}else{
			include 'menu.php';
			echo "hapus data admin gagal</br>";
			echo $this->db->error;
		}
	}
	public function updateadmin($idadmin, $username, $password){ 
		$query = "update admin set username='$username', password='$password' where idadmin=$idadmin";
		
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "edit data admin berhasil";
		}else{
			include 'menu.php';
			echo "edit data admin gagal</br>";
			echo $this->db->error;
		}
	}


	public function carihotel($value){
		$data = array();
		$query = "select * from hotel where nama like '%$value%' "; 
		$sql = $this->db->query($query);
		while ($x = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$data[] = $x;
		}
		return $data;
	}

	public function masukuser($username, $password, $email, $telepon){ 
	$sql="insert into user (username, password, email, telepon) values ('$username', '$password', '$email', '$telepon' )";
	$query = $this->db->query($sql);
	
	if($query){
		include 'menu.php';
	echo "<br>Berhasil</br>";

	}else{
		echo "daftar user gagal</br>";
		echo"<br/>".$this->db->error;
	}
	}

	public function masukkamar($tipe, $namakamar, $status){ 
	$sql="insert into kamar (tipe, namakamar, status) values ('$tipe', '$namakamar', '$status' )";
	$query = $this->db->query($sql);
	
	if($query){
		include 'menu.php';
	echo "<br>Berhasil</br>";

	}else{
		echo "Input data kamar gagal</br>";
		echo"<br/>".$this->db->error;
	}
	}

		public function tampilkamar(){ 
		$query = " select * from kamar";
		$sql = $this->db->query($query);
		$data = array();

		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
	}

	public function masukhotel($kategori, $nama, $asal, $harga){ 
		$sql="insert into hotel (kategori, nama, asal, harga) values ('$kategori', '$nama', '$asal', '$harga' )";
		$query = $this->db->query($sql);
		if($query){
			include 'menu.php';
		echo "<br>Berhasil</br>";
		}else{
			echo "Tambah Hotel gagal</br>";
			echo"<br/>".$this->db->error;
		}
	}
	public function tampilhotel(){ 
		$query = " select * from hotel";
		$sql = $this->db->query($query);
		$data = array();

		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
	}

	public function masuktrans($id_user, $idhotel, $idkamar, $jumlah_orang, $tgl_checkin, $tgl_checkout, $total_harga){ 
	$sql="insert into transaksi (id_user,  idhotel, idkamar, jumlah_orang, tgl_checkin, tgl_checkout, total_harga) values ('$id_user',  '$idhotel', '$idkamar', '$jumlah_orang', '$tgl_checkin', '$tgl_checkout', '$total_harga')";
	$query = $this->db->query($sql);
	
	if($query){
		include 'menubyr.php';
	}else{
		echo "Transaksi pemesanan gagal</br>";
		echo"<br/>".$this->db->error;
	}
	}

	public function tampiltrans2(){ 
		$query = "select * from transaksi where idtransaksi={$_GET['idtransaksi']}";
		$sql = $this->db->query($query);
		$data = array();

		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
	}

	public function tampiluser(){
		$query = " SELECT * FROM user";
		$sql = $this->db->query($query);
		$data = array();

		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
	}

		public function tampilkategori(){ 
		$query = " select * from kategori";
		$sql = $this->db->query($query);
		$data = array();

		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
	}

	public function tampilsewa($value){
		$data = array();
		$query = "select transaksi.idtransaksi, kamar.idkamar, kamar.namakamar, kamar.status, transaksi.total_harga, transaksi.sisa_waktu from transaksi INNER JOIN kamar ON transaksi.idkamar = kamar.idkamar where tgl_checkin like '%$value%' "; 
		$sql = $this->db->query($query);
		while ($x = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$data[] = $x;
		}
		return $data;
	}

	public function tampiltransaksi(){
		$data = array();
		$query = "select transaksi.idtransaksi, kamar.idkamar, kamar.namakamar, kamar.status, transaksi.total_harga, transaksi.sisa_waktu from transaksi INNER JOIN kamar ON transaksi.idkamar = kamar.idkamar "; 
		$sql = $this->db->query($query);
		while ($x = mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
			$data[] = $x;
		}
		return $data;
	}



		public function tampilhotel2(){ 
		$query = "select * from hotel where idhotel={$_GET['idhotel']}";
		$sql = $this->db->query($query);
		$data = array();

		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
	}

	public function tampiltipe(){ 
		$query = " select * from tipe";
		$sql = $this->db->query($query);
		$data = array();

		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
	}

	public function tampiltrans(){ 
		$query = "select transaksi.idtransaksi, user.id_user, kamar.idkamar, kamar.namakamar, kamar.status, transaksi.tgl_checkin, transaksi.tgl_checkout, transaksi.total_harga, transaksi.sisa_waktu from ((transaksi INNER JOIN kamar ON transaksi.idkamar = kamar.idkamar) INNER JOIN user ON transaksi.id_user=user.id_user)";
		$sql = $this->db->query($query);
		$data = array();

		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
	}
		public function deleteuser($id_user){ 
		$query = "delete from user where id_user=$id_user";
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "<h5 align='center'><b>Hapus data user berhasil</b></h5>";
		}else{
			include 'menu.php';
			echo "<h5 align='center'><b>Hapus data user gagal</b></h5></br>";
			echo $this->db->error;
		}
	}
	
	public function updateuser($id_user, $username, $password, $email, $telepon){ 
		$query = "update user set username='$username', password='$password', email='$email', telepon='$telepon' where id_user=$id_user";
		
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "edit data user berhasil";
		}else{
			include 'menu.php';
			echo "edit data user gagal</br>";
			echo $this->db->error;
		}
	}

	public function deletehotel($idhotel){ 
		$query = "delete from hotel where idhotel=$idhotel";
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "<h5 align='center'><b>Hapus data hotel berhasil</b></h5>";
		}else{
			include 'menu.php';
			echo "<h5 align='center'><b>Hapus data hotel gagal</b></h5></br>";
			echo $this->db->error;
		}
	}
	
	public function updatehotel($idhotel, $kategori, $nama, $asal, $harga){ 
		$query = "update hotel set kategori='$kategori', nama='$nama', asal='$asal', harga='$harga' where idhotel=$idhotel";
		
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "edit data hotel berhasil";
		}else{
			include 'menu.php';
			echo "edit data hotel gagal</br>";
			echo $this->db->error;
		}
	}

	public function deletekamar($idkamar){
		$query = "delete from kamar where idkamar=$idkamar";
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "<h5 align='center'><b>Hapus data kamar berhasil</b></h5>";
		}else{
			include 'menu.php';
			echo "<h5 align='center'><b>Hapus data kamar gagal</b></h5></br>";
			echo $this->db->error;
		}
	}
	
	public function updatekamar($idkamar, $tipe, $namakamar, $status){ 
		$query = "update kamar set tipe='$tipe', namakamar='$namakamar', status='$status' where idkamar=$idkamar";
		
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "edit data kamar berhasil";
		}else{
			include 'menu.php';
			echo "edit data kamar gagal</br>";
			echo $this->db->error;
		}
	}

	public function deletetrans($idtransaksi){
		$query = "delete from transaksi where idtransaksi=$idtransaksi";
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "<h5 align='center'><b>Hapus data transaksi berhasil</b></h5>";
		}else{
			include 'menu.php';
			echo "<h5 align='center'><b>Hapus data transaksi gagal</b></h5></br>";
			echo $this->db->error;
		}
	}

	public function updatetrans($idtransaksi, $total_harga){ 
		$query = "update transaksi set total_harga='$total_harga' where idtransaksi=$idtransaksi";
		
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "edit data Transaksi berhasil";
		}else{
			include 'menu.php';
			echo "edit data Transaksi gagal</br>";
			echo $this->db->error;
		}
	}
}

?>