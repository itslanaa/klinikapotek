<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_obat = mysql_real_escape_string($_POST['kd_obat']);
$nm_obat = mysql_real_escape_string($_POST['nm_obat']);
$harga_modal = mysql_real_escape_string($_POST['harga_modal']);
$harga_jual = mysql_real_escape_string($_POST['harga_jual']);
$stok = mysql_real_escape_string($_POST['stok']);
$keterangan = mysql_real_escape_string($_POST['keterangan']);

// menginput data ke database
mysqli_query($conn,"insert into tb_obat values('$kd_obat','$nm_obat','$harga_modal','$harga_jual','$stok','$keterangan')");
 
// redirect ke halaman data dan menampilkan pesan tambah
header("location:../obat_data.php?pesan=tambah");
 
?>
