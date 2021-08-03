<?php
include_once "../../../config/koneksi.php";

if (isset($_GET['id'])) {
			$delete = mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_daftar = '".$_GET['id']."'");
        echo '<script>window.location="pendaftaran_data.php"</script>';	
}
?>