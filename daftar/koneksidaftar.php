<?php
session_start();
	include "koneksi.php";
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$user_cek = mysqli_num_rows( mysqli_query($conn, "SELECT * FROM daftar WHERE username = '$username'"));

	if($user_cek > 0){
		echo '<script>window.alert ("Username Sudah Ada")</script>';
		echo '<script>window.location= "daftar.php"</script>';
	} else {
		mysqli_query($conn, "INSERT INTO daftar VALUES('$username','$email','$password')");
		echo '<script>window.alert ("Registrasi Berhasil")</script>';
		echo '<script>window.location= "inputbiodata/index2.php"</script>';
	}
	?>