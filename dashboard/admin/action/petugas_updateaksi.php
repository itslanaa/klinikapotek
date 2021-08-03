<?php 
 
include '../../../config/koneksi.php';

$id = mysql_real_escape_string($_POST['id']);
$kode = mysql_real_escape_string($_POST['kode']);
$nama = mysql_real_escape_string($_POST['nama']);
$username = mysql_real_escape_string($_POST['username']);
$password = md5($_POST['password']);
$no_telp = mysql_real_escape_string($_POST['no_telp']);
$level = mysql_real_escape_string($_POST['level']);
 
$dp = mysqli_query($conn,"UPDATE tb_petugas SET kd_petugas='$kode', nama='$nama', username='$username', password='$password', no_telp='$no_telp', level='$level' WHERE id_petugas='$id'");

// redirect ke halaman data dan menampilkan pesan edit
header("location:../petugas_data.php?pesan=edit");
?>


