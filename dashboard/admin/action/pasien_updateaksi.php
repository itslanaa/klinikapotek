<?php 
 
include '../../../config/koneksi.php';

// menangkap data yang di kirim dari form
$id = mysql_real_escape_string($_POST['id']);
$no_rm = mysql_real_escape_string($_POST['no_rm']);
$no_identitas = mysql_real_escape_string($_POST['no_identitas']);
$nm_pasien = mysql_real_escape_string($_POST['nm_pasien']);
$jns_kelamin = mysql_real_escape_string($_POST['jns_kelamin']);
$gol_darah = mysql_real_escape_string($_POST['gol_darah']);
$agama = mysql_real_escape_string($_POST['agama']);
$tempat_lahir = mysql_real_escape_string($_POST['tempat_lahir']);
$tanggal_lahir = mysql_real_escape_string($_POST['tanggal_lahir']);
$no_telp = mysql_real_escape_string($_POST['no_telp']);
$alamat = mysql_real_escape_string($_POST['alamat']);
$status = mysql_real_escape_string($_POST['status']);
$pekerjaan = mysql_real_escape_string($_POST['pekerjaan']);
$nm_keluarga = mysql_real_escape_string($_POST['nm_keluarga']);
$telp_keluarga = mysql_real_escape_string($_POST['telp_keluarga']);
$tgl_rekam = mysql_real_escape_string($_POST['tgl_rekam']);
$kd_petugas = mysql_real_escape_string($_POST['kd_petugas']);
 
 
$dpn = mysqli_query($conn,"UPDATE tb_pasien SET no_rm='$no_rm', no_identitas='$no_identitas', nm_pasien='$nm_pasien', jns_kelamin='$jns_kelamin', gol_darah='$gol_darah', agama='$agama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', no_telp='$no_telp', alamat='$alamat', status='$status', pekerjaan='$pekerjaan', nm_keluarga='$nm_keluarga', telp_keluarga='$telp_keluarga', tgl_rekam='$tgl_rekam', kd_petugas='$kd_petugas' WHERE no_rm='$id'");

 // redirect ke halaman data dan menampilkan pesan edit
header("location:../pasien_data.php?pesan=edit");
?>


