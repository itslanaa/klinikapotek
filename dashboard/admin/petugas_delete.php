<?php
include_once("../../config/koneksi.php");
 
// mengambil id dari URL untuk menghapus user
$id = $_GET['id'];
 
// menghapus baris pengguna dari tabel berdasarkan id 
$dp = mysqli_query($conn, "DELETE FROM tb_users WHERE id_users=$id");
 
// redirect ke halaman petugas_data.php dengan pesan hapus
header("location:petugas_data.php?pesan=hapus");
?>
