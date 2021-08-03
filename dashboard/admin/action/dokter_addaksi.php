<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_dokter = mysql_real_escape_string($_POST['kd_dokter']);
$nm_dokter = mysql_real_escape_string($_POST['nm_dokter']);
$jns_kelamin = mysql_real_escape_string($_POST['jns_kelamin']);
$tempat_lahir = mysql_real_escape_string($_POST['tempat_lahir']);
$tanggal_lahir = mysql_real_escape_string($_POST['tanggal_lahir']);
$alamat = mysql_real_escape_string($_POST['alamat']);
$no_telp = mysql_real_escape_string($_POST['alamat']);
$spesialisasi = mysql_real_escape_string($_POST['spesialisasi']);
 
// menginput data ke database
mysqli_query($conn,"insert into tb_dokter values('$kd_dokter','$nm_dokter','$jns_kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$no_telp','$spesialisasi')");
 
// redirect ke halaman data dan menampilkan pesan tambah
header("location:../dokter_data.php?pesan=tambah");
 
?>