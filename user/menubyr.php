<?php include 'menu.php' ?>

  <?php
  $con=new mysqli("localhost","root","","imk");
    $q=$con->query(" select * from transaksi");
    while($r=$q->fetch_assoc()){
      $idtrans=$r['idtrans'];
      $keterangan='keterangan';
  } 
    echo "<h5 align='center' value='{$idtrans}'>Kode Transaksi Anda<br><b>$idtrans</b></h5><input type='hidden'  name='keterangan' value='langsung'>";

  ?>
    <div class="col l10" align="center">
    <div class="utama">
    <form role="form" name="register" method="post" action="updatetrans.php">
    <tr>
    <td>
    <input type="hidden" name="idtrans" value="<?php echo $idtrans;?>"/></td>
    <input type="hidden" name="id_user" value="<?php echo $id_user;?>"/></td>
    <input type="hidden" name="idhotel" value="<?php echo $idhotel;?>"/></td>
    <input type="hidden" name="asalkb" value="<?php echo $asalkb;?>"/></td>
    <input type="hidden" name="halte" value="<?php echo $halte;?>"/></td>
    <input type="hidden" name="rute" value="<?php echo $rute;?>"/></td>
    <input type="hidden" name="tgl" value="<?php echo $tgl;?>"/></td>
    <input type="hidden" name="idtipe" value="<?php echo $idtipe;?>"/></td>
    <input type="hidden" name="total_harga" value="<?php echo $total_harga;?>"/>
    <input type="hidden"  name="keterangan" value="keterangan"/></td></td>
    <td></td>
    </tr>
    <tr><td></td>
    <td><button class="btn waves-effect waves- light-green darken-4" type ="submit" value="submit" >langsung</button></td></tr></form>
    <a href="transfer.php" class='btn waves-effect waves- light-green darken-4'>transfer</br></a></td>
    </tr></div>