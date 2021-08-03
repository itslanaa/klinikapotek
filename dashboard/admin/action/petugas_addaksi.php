<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$kode = mysql_real_escape_string($_POST['kode']);
$nama = mysql_real_escape_string($_POST['nama']);
$username = mysql_real_escape_string($_POST['username']);
$password = md5($_POST['password']);
$no_telp = mysql_real_escape_string($_POST['no_telp']);
$level = mysql_real_escape_string($_POST['level']);
 
// menginput data ke database
mysqli_query($conn,"insert into tb_petugas values('','$kode','$nama','$username','$password','$no_telp','$level')");
 
// redirect ke halaman data dan menampilkan pesan tambah
header("location:../petugas_data.php?pesan=tambah");
 
?>