<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_tindakan = mysql_real_escape_string($_POST['kd_tindakan']);
$nm_tindakan = mysql_real_escape_string($_POST['nm_tindakan']);
$harga = mysql_real_escape_string($_POST['harga']);

// menginput data ke database
mysqli_query($conn,"insert into tb_tindakan values('$kd_tindakan','$nm_tindakan','$harga')");
 
// redirect ke halaman data dan menampilkan pesan tambah
header("location:../tindakan_data.php?pesan=tambah");
 
?>
