<?php
if(isset($_POST['submit-pesan'])){
$namap=$_POST['nama_pemesan'];
$no_id=$_POST['no_identitas'];
$jenkel=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$kursi1=$_POST['kursi_1'];
$kursi2=$_POST['kursi_2'];
$jumlah_pesan=$_POST['jumlah_pesan'];
$tanggal=$_POST['tanggal'];
$dewasa=$_POST['Dewasa'];
$infant=$_POST['Infant'];
$id_kereta=$_POST['id_kereta'];

$mysqli = new mysqli("localhost", "root", "", "ka");
$sql1="insert into tiket(jml_pesan, tgl_berangkat, dewasa, infant) values('$jumlah_pesan', '$tanggal', '$dewasa', '$infant')";
$query1 = mysqli_query($mysqli, $sql1);

$tiket_id= mysqli_insert_id ($mysqli);

$i=0;
foreach($namap as $nama){ //perulangan yg tdk perlu syarat sesuai kondisi
$namap = $_POST['nama_pemesan'][$i];
$no_id = $_POST['no_identitas'][$i];
$alamat = $_POST['alamat'][$i];
$jenkel = $_POST['jenis_kelamin'][$i];
$no_telp = $_POST['no_telp'][$i];
$kursi_g = $_POST['kursi_2'][$i].' - '.$_POST['kursi_1'][$i];

	echo "Nama : $nama"."<br>";
	$sql="insert into pemesan(no_identitas, nama_pemesan, nama_kursi, jenis_kelamin, alamat, no_telp, id_tiket, id_kereta) values('$no_id', '$namap', '$kursi_g', '$jenkel', '$alamat', '$no_telp', '$tiket_id', '$id_kereta')";
	$query = mysqli_query($mysqli, $sql);
	$i++;	
}

$cari_kereta = "select * from kereta inner join pemesan ON kereta.id_kereta = pemesan.id_kereta where pemesan.id_tiket='$tiket_id'";
$query_kereta= mysqli_query($mysqli, $cari_kereta);
$bayar = mysqli_fetch_assoc($query_kereta);
$total_bayar = ($bayar['harga']*$jumlah_pesan);

echo "Total bayar : $total_bayar"."<br>";
}
?>