<?php

	$koneksi = new mysqli("localhost", "root", "", "ka");
	$isi=$_GET['isi'];
	$nama=$_GET['nama'];
	$notelp=$_GET['notelp'];
	$email=$_GET['email'];
	
	
	$sql= "insert into testimonial(isi, nama, notelp, email) values('$isi','$nama','$notelp','$email')";
	$query= mysqli_query($koneksi, $sql);
 if ($query){
			echo"<script>alert('terimakasih telah berkomentar');window.location='index.php'</script>";
		}else{
			echo "kesalahan pemasukan data";
		}
?> 