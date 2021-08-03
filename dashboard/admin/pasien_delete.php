<?php
include_once '../../config/koneksi.php';
 
// mengambil id dari URL untuk menghapus pasien
$id = $_GET['id'];
 
// menghapus baris pengguna dari tabel berdasarkan id 
$dpn = mysqli_query($conn, "DELETE FROM tb_pasien WHERE no_rm='$id'");
 
// redirect ke halaman data dengan pesan hapus
header("location:pasien_data.php?pesan=hapus");
?>
