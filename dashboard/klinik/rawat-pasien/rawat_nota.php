<?php
include_once "../../../config/koneksi.php";

if (isset($_GET['id'])) {
  error_reporting(0);
    $ubah = mysqli_query($conn, "SELECT * FROM tb_tambah ORDER BY nrawat = '".$_GET['id']."' DESC");
      
     $nomor++;                             
     $u     = mysqli_fetch_object($ubah);
}


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cetak Nota Rawat Pasien - Klinik Apotek</title>
<link href="../styles/styles_cetak.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	window.print();
	window.onfocus=function(){ window.close();}
</script>
</head>
<body onLoad="window.print()">
<table class="table-list" width="600" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td height="87" colspan="4" align="center">
      <img width="300" src="../../../assets/img/logo.png">
  </tr>
  <tr>
    <td colspan="2"><strong>No. Nota :</strong> <?php echo $u->norem?></td>
    <td colspan="2" align="right"> <?php echo $u->grawat ?></td>
  </tr>
  <tr>
    <td width="23" bgcolor="#F5F5F5"><strong>No</strong></td>
    <td width="307" bgcolor="#F5F5F5"><strong>Daftar Tindakan </strong></td>
    <td width="174" bgcolor="#F5F5F5"><strong>Dokter</strong></td>
    <td width="80" align="right" bgcolor="#F5F5F5"><strong>Harga@</strong></td>
  </tr>
<?php
# Baca variabel
$totalBayar = 0; 
$uangKembali=0;


$nomor++;
	$totalBayar	= $totalBayar + $u->hartin;
	$uangKembali= $u->dp - $totalBayar;
?>
  <tr>
    <td><?php echo $nomor; ?></td>
    <td><?php echo $u->tinpas ?></td>
    <td><?php echo $u->dokter ?></td>
    <td align="right"><?php echo $u->hartin ?></td>
  </tr>
<?php  ?>
  <tr>
    <td colspan="3" align="right"><strong>Total Biaya Tindakan (Rp) : </strong></td>
    <td align="right" bgcolor="#F5F5F5"><?php echo number_format($totalBayar); ?></td>
  </tr>
  <tr>
    <td colspan="3" align="right"><strong> Uang Bayar (Rp) : </strong></td>
    <td align="right"><?php echo number_format($u->dp); ?></td>
  </tr>
   <tr>
    <td colspan="3" align="right"><strong> Uang Kembali (Rp) : </strong></td>
    <td align="right"><?php echo number_format($uangKembali); ?></td>
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
