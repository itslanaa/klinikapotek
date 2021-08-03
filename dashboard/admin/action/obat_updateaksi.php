<?php 
 
include '../../../config/koneksi.php';

$id = mysql_real_escape_string($_POST['id']);
$kd_obat = mysql_real_escape_string($_POST['kd_obat']);
$nm_obat = mysql_real_escape_string($_POST['nm_obat']);
$harga_modal = mysql_real_escape_string($_POST['harga_modal']);
$harga_jual = mysql_real_escape_string($_POST['harga_jual']);
$stok = mysql_real_escape_string($_POST['stok']);
$keterangan = mysql_real_escape_string($_POST['keterangan']);

$do = mysqli_query($conn,"UPDATE tb_obat SET kd_obat='$kd_obat', nm_obat='$nm_obat', harga_modal='$harga_modal', harga_jual='$harga_jual', stok='$stok', keterangan='$keterangan' WHERE kd_obat='$id'");

// redirect ke halaman data dan menampilkan pesan edit
header("location:../obat_data.php?pesan=edit");
?>


