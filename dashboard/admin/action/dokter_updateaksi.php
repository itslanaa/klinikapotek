<?php 
 
include '../../../config/koneksi.php';

$id = mysql_real_escape_string($_POST['id']);
$kd_dokter = mysql_real_escape_string($_POST['kd_dokter']);
$nm_dokter = mysql_real_escape_string($_POST['nm_dokter']);
$jns_kelamin = mysql_real_escape_string($_POST['jns_kelamin']);
$tempat_lahir = mysql_real_escape_string($_POST['tempat_lahir']);
$tanggal_lahir = mysql_real_escape_string($_POST['tanggal_lahir']);
$alamat = mysql_real_escape_string($_POST['alamat']);
$no_telp = mysql_real_escape_string($_POST['no_telp']);
$spesialisasi = mysql_real_escape_string($_POST['spesialisasi']);
 
$dd = mysqli_query($conn,"UPDATE tb_dokter SET kd_dokter='$kd_dokter', nm_dokter='$nm_dokter', jns_kelamin='$jns_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat', no_telp='$no_telp', spesialisasi='$spesialisasi' WHERE kd_dokter='$id'");

 // redirect ke halaman data dan menampilkan pesan edit
header("location:../dokter_data.php?pesan=edit");
?>


