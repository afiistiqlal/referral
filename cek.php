<?php 
// koneks database
include'config.php';

// ambil data login
$username = $_POST['username'];
$password = $_POST['password'];

// login sesuai konfigurasi database
$status = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' and password = '$password'") or die(mysqli_error());

// cek user
if (mysqli_num_rows($status) > 0) {
	// mengambil isi array 
	while($isi = mysqli_fetch_assoc($status)) {
		
		// memindahkan halaman sesuai status
		// login ke admin
		if($isi['status'] > 0){
			session_start();
			$name = $isi['name'];
			$_SESSION ['name'] = $name;
			header('location:admin/index.php');
		
		// login ke user
		}elseif($isi['status'] == 0){
			session_start();
			$_SESSION ['username'] = $username;
			header('location:user/index.php');
		}
	}
}else{
	// balik ke halaman login
	header('location:login.php');
}
?>