<?php 

$conn = mysqli_connect('localhost','root','','db_klinikapotek');

// Cek koneksi & menampilkan detail eror
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}


?>