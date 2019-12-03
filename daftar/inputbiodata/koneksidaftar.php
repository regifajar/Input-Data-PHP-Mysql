<?php
session_start();
	include "koneksi.php";
	$nik				= $_POST['nik'];
	$nama				= $_POST['nama'];
	$jenis_kelamin		= $_POST['jenis_kelamin'];
	$hari				= $_POST['hari'];
	$bulan				= $_POST['bulan'];
	$tahun				= $_POST['tahun'];
	$ttl 				= $hari."-".$bulan."-".$tahun;
	$alamat				= $_POST['alamat'];
	$pendidikan			= $_POST['pendidikan'];
	$thnlulus			= $_POST['thnlulus'];
	$skill				= $_POST['skill'];
	
	$data = mysqli_query($conn, "SELECT * FROM tabel_biodata WHERE nik = '$nik'");
	$cek = mysqli_num_rows($data);
	if($cek > 0){
		echo '<script>window.alert ("NIK Sudah Terdaftar, Harap Ganti Lagi")</script>';
		echo '<script>window.location= "index2.php"</script>';
	} else {
		mysqli_query($conn, "INSERT INTO tabel_biodata VALUES('$nik','$nama','$jenis_kelamin','$ttl','$alamat','$pendidikan','$thnlulus','$skill')");
		echo '<script>window.alert ("Registrasi Berhasil")</script>';
		echo '<script>window.location= "selesai/selesai.html"</script>';
	}
	?>