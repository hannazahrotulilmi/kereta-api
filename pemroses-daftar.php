<?php
	$mysqli = new mysqli("localhost", "root", "", "ka");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$usia=$_POST['usia'];
	$nama_file=$_FILES['file']['name'];
	$tmp_file=$_FILES['file']['tmp_name'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	
	if ($username != "" && $password != "" && $nama != "" && $usia != "" && $jenis_kelamin != "" && $nama_file != ""){
		$sql = "INSERT INTO member(username, password, nama, alamat, email, usia, jenis_kelamin, gambar) VALUES('$username', '$password', '$nama', '$alamat', '$email', '$usia', '$jenis_kelamin', '$nama_file')";
		$query = mysqli_query($mysqli, $sql);
		if ($query) {
			move_uploaded_file($tmp_file, 'img/'.$nama_file);
			header("location:index.php?halaman=home");
		} else{
			echo "kesalahan pemasukan data";
		}
	}else{
		echo "Isilah dengan lengkap";
	}
?>