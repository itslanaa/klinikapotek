<?php
include '../../../config/koneksi.php';

if (isset($_GET['id'])) {
  error_reporting(0);
                              $ubah = mysqli_query($conn, "SELECT * FROM tb_penjualan LEFT JOIN tb_obat USING (kd_obat) ORDER BY no_penjualan = '".$_GET['id']."'");
                              $nomor++;
                              $u     = mysqli_fetch_object($ubah);
  
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cetak Nota Penjualan Obat - Klinik Apotek</title>
<link href="../styles/styles_cetak.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	window.print();
	window.onfocus=function(){ window.close();}
</script>
</head>
<body onLoad="window.print()">
<table class="table-list" width="430" border="0" cellspacing="0" cellpadding="2">
   <tr>
    <td height="87" colspan="4" align="center">
      <img width="300" src="../../../assets/img/logo.png">
  </tr>  
  <tr>
    <td colspan="2"><strong>No Nota :</strong> <?php echo $u->no_penjualan ?></td>
    <td colspan="3" align="right"><?php echo $u->tgl_penjualan ?></td>
  </tr>
  <tr>
    <td width="23" align="right" bgcolor="#F5F5F5"></td>
    <td width="174" bgcolor="#F5F5F5"><strong>No</strong></td>
    <td width="307" bgcolor="#F5F5F5"><strong>Daftar Obat</strong></td>
    <td width="80" align="right" bgcolor="#F5F5F5"><strong>Harga@</strong></td>
  </tr>
  <tr>
    <td width="23" align="right" bgcolor="#F5F5F5"></td>
    <td width="23"><?php echo $nomor; ?></td>
    <td width="174"><?php echo $u->kd_obat ?> / <?php echo $u->nm_obat ?></td>
    <td width="307" align="right"><?php echo number_format($u->harga_jual) ?></td>
  </tr>
  <tr>
    <td colspan="3" align="right"><strong> Uang Bayar (Rp) : </strong></td>
    <td colspan="2" align="right" bgcolor="#F5F5F5"><?php echo number_format($u->uang_bayar) ?></td>
  </tr>
  <tr>
    <td colspan="3" align="right"><strong> Uang Kembali (Rp) : </strong></td>
    <td colspan="2" align="right"><?php echo number_format($u->uang_bayar - $u->harga_jual) ?></td>
  </tr>
  <tr>
    <td width="23" bgcolor="#F5F5F5"></td>
    <td width="307" bgcolor="#F5F5F5"> ‏‏‎  ‏‏‎  ‏‏‎ ‏‏‎ </td>
    <td width="174" bgcolor="#F5F5F5"></td>
    <td width="80" align="right" bgcolor="#F5F5F5"></td>
  </tr>
</table>
</body>
</html>
