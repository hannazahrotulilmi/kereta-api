<?php
$namap=$_POST['nama_pemesan'];
$kursi1=$_POST['kursi_1'];
$kursi2=$_POST['kursi_2'];
$tanggal=$_POST['tanggal'];
$jenkel=$_POST['jenis_kelamin'];
$noid=$_POST['no_identitas'];
$alamat=$_POST['alamat'];
$notelp=$_POST['no_telp'];
$usia=$_POST['usia'];
$jml_tiket=$_POST['jml_pesan'];
$kd_jadwal=$_POST['id_tiket'];

$mysqli = new mysqli("localhost", "root", "", "ka");
$sql1="insert into tiket(tgl_berangkat, jml_pesan) values('$tgl_berangkat', '$jml_pesan')";
$query = mysqli_query($mysqli, $sql1);
$tiket_id= mysqli_insert_id ($mysqli);
$cari_kereta = "select k.tarif from kelas k inner join tiket t on k.id_kereta=t.id_kereta where id_tiket='$tiket_id'";
$query_kereta= mysqli_query($mysqli, $cari_film);
$total = mysqli_fetch_assoc ($query_film);
$total_harga = $total['tarif']*$jml_pesan;


?>