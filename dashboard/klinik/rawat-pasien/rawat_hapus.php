<?php
include_once "../../../config/koneksi.php";

if (isset($_GET['id'])) {
			$delete = mysqli_query($conn, "DELETE FROM tb_tambah WHERE nrawat = '".$_GET['id']."'");
        echo '<script>window.location="rawat_baru"</script>';	
}
?>