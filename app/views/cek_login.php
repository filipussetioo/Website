<?php

session_start();
 
// menghubungkan dengan koneksi
include '../function/database.php';
$db = new database();
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db->connect(),"select * from user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 $hasil = [];
 if ($data) {
	while ($row = mysqli_fetch_array($data)) {
		$hasil[] = $row;
	}
}
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = $hasil[0]['level'];
	$_SESSION['status'] = "login";
	if ($hasil[0]['level'] == 'penjual') {
		header("location:menu_penjual.php");
	}
	if ($hasil[0]['level'] == 'pemilik') {
		header("location:menu_pemilik.php");
	}
}else{
	header("location:login.php?pesan=gagal");
}
?>