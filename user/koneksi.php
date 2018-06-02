
<link rel='stylesheet' type='text/css' href='aset/css/materialize.min.css'>
<script src='aset/js/jquery.js'></script>
<script src='aset/js/materialize.min.js'></script>
<?php
class Database{
	function __construct(){
		$this->db = new mysqli("localhost","root","","pr");

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
	echo "<br><center><br>Daftar berhasil<br>Silahkan klik tombol masuk untuk mengakses ke hotelpass</br>";
	echo "<br><center><a href='index.php' class='btn waves-effect waves- light-green darken-4'>Masuk</br></a>";

	}else{
		echo "daftar user gagal</br>";
		echo"<br/>".$this->db->error;
	}
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
	public function tampiluser(){
		$query = " SELECT * FROM user where username = '$_SESSION[username]'";
		$sql = $this->db->query($query);
		$data = array();

		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
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
		public function tampilkategori(){ 
		$query = " select * from kategori";
		$sql = $this->db->query($query);
		$data = array();

		while($x = mysqli_fetch_array($sql)){
			$data[] = $x;
		}
		return $data;
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
	
	public function updateuser($id_user, $username, $password, $email, $telepon){ 
		$query = "update user set username='$username', password='$password', email='$email', telepon='$telepon' where id_user=$id_user";
		
		$sql = $this->db->query($query);
		if($sql){
			echo "edit data user berhasil";
		}else{
			echo "edit data user gagal</br>";
			echo $this->db->error;
		}
	}

	public function updatetrans($idtrans, $id_user, $idhotel, $asalkb, $halte, $rute, $tgl, $idtipe, $total_harga, $keterangan){ 
		$query = "update transaksi set idtrans=$idtrans, id_user='$id_user', idhotel='$idhotel', asalkb='$asalkb', halte='$halte', rute='$rute', tgl='$tgl', idtipe='$idtipe', total_harga='$total_harga', $keterangan='$keterangan' where idtrans=$idtrans";
		
		$sql = $this->db->query($query);
		if($sql){
			include 'menu.php';
			echo "<br><h6 align='center'><b>Permintaan disetujui<br>Silahkan melakukan pembayaran langsung dihalte</b></h6>";
		}else{
			include 'menu.php';
			echo "<br><h6 align='center'><b>Permintaan tidak disetujui</br></b></h6>";
			echo $this->db->error;
		}
	}
}
?>