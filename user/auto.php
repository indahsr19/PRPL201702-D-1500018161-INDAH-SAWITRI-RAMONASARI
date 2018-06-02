 <?php
	$con=new mysqli("localhost","root","","pr");
	if(isset($_GET['kodes'])){
		$q=$con->query("select * from hotel where idhotel={$_GET['kodes']}");
		while($r=$q->fetch_assoc()){
			$harga=$r['harga'];
		}
		echo $harga;
	}
	if(isset($_GET['kodes1'])){
		$q=$con->query("select * from tipe where idtipe={$_GET['kodes1']}");
		while($r=$q->fetch_assoc()){
			$tambah=$r['tambah'];
		}
		echo $tambah;	
	}
	if(isset($_GET['kodes2'])){
		$q=$con->query("select * from kamar where tipe={$_GET['kodes2']}");
		while($r=$q->fetch_assoc()){
			echo "<option value='{$r['idkamar']}'>{$r['namakamar']}</option>";
		}
	}
	if(isset($_GET['kodes4'])){
		$q=$con->query("select * from hotel  where idhotel={$_GET['kodes4']}");
		while($r=$q->fetch_assoc()){
			$kategori=$r['kategori'];
		}
		echo $kategori;
	}
	if(isset($_GET['kodes3'])){
		$q=$con->query("select kategori.nama from hotel INNER JOIN kategori ON hotel.kategori = kategori.id where idhotel={$_GET['kodes3']}");
		while($r=$q->fetch_assoc()){
			$nama=$r['nama'];
		}
		echo $nama;
	}
	if(isset($_GET['idKota'])){
		$q=$con->query("select * from hotel where kategori={$_GET['idKota']}");
		while($r=$q->fetch_assoc()){
			echo "<br><div class='col l10'>
					<table class='tabel' align='center'>
					<tr><td>
					<a value='{$r['idhotel']}' style='color:black'><b>{$r['nama']}</b></a></tr>
					<tr><td><a value='{$r['idhotel']}' style='color:black'>{$r['asal']}</a></td></tr>
					<tr><td>Mulai dari <b>Rp. <a value='{$r['idhotel']}' style='color:black'>{$r['harga']}</a></b></td></tr>
					<tr><td><a href='pesan.php?idhotel={$r['idhotel']}' class='btn waves-effect waves- light yellow darken-4'> pesan </a></td></tr></table>";
		}
	}

		if(isset($_GET['idtp'])){
		$q=$con->query("select * from tipe where idtipe={$_GET['idtp']}");
		while($r=$q->fetch_assoc()){
			echo "<br><div class='col l10'>
					<table class='tabel' align='center'>
					<tr><td>
					<a value='{$r['idtipe']}' style='color:black'><b>{$r['namatipe']}</b></a></tr>
					<tr><td><a value='{$r['idtipe']}' style='color:black'>{$r['fasilitas']}</a></td></tr>
					<tr><td>Biaya Tambahan dari Tarif Standar <b><a value='{$r['idtipe']}' style='color:black'>{$r['tambah']}</a></b></td></tr>";
		}
	}

?>