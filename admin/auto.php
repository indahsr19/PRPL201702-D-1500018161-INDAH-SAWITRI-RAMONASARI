  <?php
	$con=new mysqli("localhost","root","","pr");

	if(isset($_GET['kodes'])){
		$q=$con->query("select * from tipe where idtipe={$_GET['kodes']}");
		while($r=$q->fetch_assoc()){
			$denda=$r['denda'];
		}
		echo $denda;
		
	}


?>