<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"></div>
  <div class="panel-body">
  
<form class="form-horizontal" enctype="multipart/form-data" action="index.php" method="post">
 <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Tanggal</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="datepicker" placeholder="Tanggal">
      <input type="hidden" class="form-control" name="tanggal" id="datepickers">
    </div>
 </div>
 
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Kereta</label>
  <div class="col-sm-3">  
	<select name="id_kereta" class="form-control">
	   <?php 
		
		$mysqli = new mysqli("localhost", "root", "", "ka");
		$sql="select k.id_kelas, j.id_jadwal, j.stasiun_asal, j.stasiun_tujuan, j.jam_berangkat, j.jam_tiba, k.jenis_kelas, r.harga, r.id_kereta, r.nama_kereta from jadwal j inner join kereta r on j.id_jadwal=r.id_jadwal inner join kelas k on k.id_kelas=r.id_kelas";
		$result = mysqli_query($mysqli,$sql);
		while ($row = mysqli_fetch_assoc($result)) {?>
			<option value="<?php echo $row['id_kereta'];?>">
			<?php echo $row['nama_kereta'];?> | <?php echo $row['stasiun_asal'];?> | <?php echo $row['stasiun_tujuan'];?> | <?php echo $row['jam_berangkat'];?> | <?php echo $row['jam_tiba'];?>
			| <?php echo $row['jenis_kelas'];?> | <?php echo $row['harga'];?></option>
			
		<?php }?>
		</select>
  </div>
  </div>

<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label">Dewasa</label>
	<div class="col-sm-3">
		<select name="Dewasa" class='form-control'>
			<option value="...">...</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select> 
	</div>
</div>
<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label">Infant</label>
	<div class="col-sm-3">
		<select name="Infant" class='form-control'>
			<option value="...">...</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select> 
	</div>
</div>

<div class="form-group">
	<label for="inputPassword3" class="col-sm-2 control-label">Jumlah Pesan</label>
	
	<div class="col-sm-3">
		<select name="jumlah_pesan" class='form-control'>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
		</select> 
	</div>
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-10">
      <input type="submit" name="hana" class="btn btn-default" value='Booking'>
    </div>
</div>
</form>
	 </div>
</div>