<?php
include_once "../../../config/koneksi.php";

if (isset($_GET['id'])) {
			$delete = mysqli_query($conn, "DELETE FROM tb_penjualan WHERE no_penjualan = '".$_GET['id']."'");
        echo '<script>window.location="index.php?p=penjualan_baru"</script>';	
}
?>