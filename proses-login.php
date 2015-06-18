<?php

	$koneksi = new mysqli("localhost", "root", "", "ka");
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if ($username != "" && $password != ""){
	$sql= "select username, password from member where username='$username' and password='$password'"; 
	$query= mysqli_query($koneksi, $sql); 
	$num = mysqli_num_rows($query); 
	if($num==1) { // login benar //  $_SESSION['user'] = $username; 
		session_start();
			$_SESSION ["username"]=$username;	//jika level = username
			//maka akan muncul pesan alert "Selamat datang di website kita" dan hamalan akan diarahkan pada home.php
		} echo"<script>alert('Selamat datang di website kita');window.location='index.php'</script>";
			}else{ // jika salah maka katasandi tidak cocok
				echo"<script>alert('Kata sandi tidak cocok');window.location='index.php'</script>";
		}
	
?> 