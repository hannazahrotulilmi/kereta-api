
<form class="form-horizontal" enctype="multipart/form-data" action="filter.php" method="post">


<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"></div></br>
  <div class="panel-body">
  </div>

 <div class="form-group">
    <label for="inputPassword3" class="col-sm-8 control-label"></label>
	<div class="col-sm-3">
      <input type="text" class="form-control" id="" placeholder="Filter" name="filter">
	</div>
	<button type="submit" class="btn btn-default" name="search">Search</button> 
 </div>
  
  <!-- Table -->
  <div class="container">
  <h2></h2></br>
   <p>Pemfilteran Kereta Api Berdasarkan ...</p>
   <div class="col-sm-11">            
  <table class="table">
   <thead>
      <tr>
        <th  bgcolor = 'gray'>No</th>
        <th align = 'center' bgcolor = 'gray'>Kereta Api</th>
		<th align = 'center' bgcolor = 'gray'>Keberangkatan</th>
		<th align = 'center' bgcolor = 'gray'>Kelas</th>
		<th align = 'center' bgcolor = 'gray'>Tarif</th>
      </tr>
    </thead>
	<?php
		$mysqli = new mysqli("localhost", "root", "", "ka");
		
		if(isset($_POST['search'])){
			$get_filter=$_POST['filter'];
			$NO=1;
			
			$filter="select * from filter where jam_berangkat='$get_filter'";
			$show=mysqli_query($mysqli,$filter);
			while($row = mysqli_fetch_array($show)){
				$i1=$row['nama_kereta'];
				$i2=$row['jam_berangkat'];
				$i3=$row['jenis_kelas'];
				$i4=$row['harga'];
	?>
    <tbody>
      <tr>
        <td  bgcolor = 'yellow'><?php echo"$NO" ?></td>
        <td  bgcolor = 'yellow'><?php echo"$i1" ?></td>
		<td  bgcolor = 'yellow'><?php echo"$i2"?></td>
		<td  bgcolor = 'yellow'><?php echo"$i3" ?></td>
		<td  bgcolor = 'yellow'><?php echo"$i4" ?></td>
      </tr>
    </tbody>
	<?php
		$NO=$NO+1;}}
	?>
  </table>
	</div>
</div>
</div>
</form>
  