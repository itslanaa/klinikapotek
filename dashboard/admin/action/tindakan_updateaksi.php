<?php 
 
include '../../../config/koneksi.php';

$id = mysql_real_escape_string($_POST['id']);
$kd_tindakan = mysql_real_escape_string($_POST['kd_tindakan']);
$nm_tindakan = mysql_real_escape_string($_POST['nm_tindakan']);
$harga = mysql_real_escape_string($_POST['harga']);

$dt = mysqli_query($conn,"UPDATE tb_tindakan SET kd_tindakan='$kd_tindakan', nm_tindakan='$nm_tindakan', harga='$harga' WHERE kd_tindakan='$id'");

 // redirect ke halaman data dan menampilkan pesan edit
header("location:../tindakan_data.php?pesan=edit");
?>


