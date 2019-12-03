<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from daftar where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	echo '<script>window.alert ("Login Berhasil")</script>';
	echo '<script>window.location= "inputbiodata/index2.php"</script>';
}else{
	echo '<script>window.alert ("Username / Password Salah")</script>';
	echo '<script>window.location= "login.php"</script>';
}
?>