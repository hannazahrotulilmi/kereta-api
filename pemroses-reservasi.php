<?php 
?>

<?php
	$mysqli = new mysqli("localhost", "root", "", "ka");
	$id_kereta=$_POST['id_kereta'];
	$tanggal=$_POST['tanggal'];
	$jumlah_pesan=$_POST['jumlah_pesan'];
	$dewasa=$_POST['Dewasa'];
	$infant=$_POST['Infant'];
	// $sql1="insert into tiket(jml_pesan, tgl_berangkat, dewasa, infant) values('$jumlah_pesan', '$tanggal', '$dewasa', '$infant')";
	// $query1 = mysqli_query($mysqli, $sql1);
?>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"></div>
  <div class="panel-body">
 
<form class="form-horizontal" enctype="multipart/form-data" action="daftar-pemesan.php" method="post">
 <input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>">
 <input type="hidden" name="id_kereta" value="<?php echo $id_kereta; ?>">
 <input type="hidden" name="jumlah_pesan" value="<?php echo $jumlah_pesan; ?>">
 <?php 
 for ($i=1;$i<=$jumlah_pesan;$i++): 
 ?>
 <p> PEMESAN  <?php echo $i; ?> </p>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nama Pemesan</label>
    <div class="col-sm-5">
      <input type="text" <?php if($i==1){ echo "value='{$session_username}'";}?> class="form-control" name="nama_pemesan[]" placeholder="nama">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Dewasa</label>
    <div class="col-sm-5">
      <input type="text"  class="form-control" value=" <?php echo $dewasa; ?>" name="Dewasa" placeholder="Dewasa">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Infant</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" value=" <?php echo $infant; ?>" name="Infant" placeholder="Infant">
    </div>
  </div>
  
     <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">No. Identitas</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="no_identitas[]" id=inputno_identitas" placeholder="No. Identitas">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="alamat[]" id=inputAlamat" placeholder="Alamat">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">No. Telepon</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="no_telp[]" id=inputno_telp" placeholder="No. Telp">
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
    <div class="col-sm-2">
		<select name="jenis_kelamin[]" class='form-control'>
		  <option value="P">P</option>
		  <option value="L">L</option>
		</select> 
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kursi</label>
    <div class="col-sm-5">
		<select name="kursi_2[]">
		  <option value="EKS-1">EKS-1</option>
		  <option value="EKS-2">EKS-2</option>
		  <option value="EKS-3">EKS-3</option>
		  <option value="BIS-1">BIS-1</option>
		  <option value="BIS-2">BIS-2</option>
		  <option value="BIS-3">BIS-3</option>
		  <option value="EKO-1">EKO-1</option>
		  <option value="EKO-2">EKO-2</option>
		  <option value="EKO-3">EKO-3</option>
		</select> 
		<select name="kursi_1[]">
		  <option value="1">1</option>
		  <option value="2">2</option>
		  <option value="3">3</option>
		  <option value="3">4</option>
		  <option value="3">5</option>
		  <option value="3">6</option>
		  <option value="3">7</option>
		  <option value="3">8</option>
		  <option value="3">9</option>
		  <option value="3">10</option>
		  <option value="3">11</option>
		  <option value="3">12</option>
		  <option value="3">13</option>
		  <option value="3">14</option>
		  <option value="3">15</option>
		  <option value="3">16</option>
		  <option value="3">17</option>
		  <option value="3">18</option>
		  <option value="3">19</option>
		  <option value="3">20</option>
		</select> 
    </div>
  </div>
   <div class="form-group">
    <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
    <input type="file" name="file" id="exampleInputFile">
  </div>
  <?php endfor; ?>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" value='OK' name='submit-pesan'>
    </div>
  </div>
</form>
	 </div>
</div>