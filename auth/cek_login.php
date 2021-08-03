<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../config/koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from tb_petugas where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../dashboard/admin/");

	// cek jika user login sebagai klinik
	}else if($data['level']=="klinik"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "klinik";
		// alihkan ke halaman dashboard pegawai
		header("location:../dashboard/klinik/");

	// cek jika user login sebagai apotek
	}else if($data['level']=="apotek"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "apotek";
		// alihkan ke halaman dashboard pengurus
		header("location:../dashboard/apotek/");

	}else{

		// alihkan ke halaman login kembali
		header("location:login?pesan=gagal");
	}	
}else{
	header("location:login?pesan=gagal");
}

?>
