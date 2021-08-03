<?php
include_once("../../config/koneksi.php");
 
// mengambil id dari URL untuk menghapus dokter
$id = $_GET['id'];
 
// menghapus baris pengguna dari tabel berdasarkan id 
$dd = mysqli_query($conn, "DELETE FROM tb_obat WHERE kd_obat='$id'");
 
// redirect ke halaman dokter_data.php dengan pesan hapus
header("location:obat_data.php?pesan=hapus");
?>
