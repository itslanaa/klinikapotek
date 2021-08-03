<?php
include_once "../library/inc.seslogin.php";

# UNTUK PAGING (PEMBAGIAN HALAMAN)
$row = 50;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM penjualan";
$pageQry = mysql_query($pageSql, $koneksidb) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?><table width="800" border="0" cellpadding="2" cellspacing="1" class="table-border">
  <tr>
    <td width="5" align="right">&nbsp;</td>
    <td colspan="2" align="right"><h1><b>DATA PENJUALAN </b></h1></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">
	<table class="table-list" width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th width="24" align="center"><strong>No</strong></th>
        <th width="85"><strong>No. Nota </strong></th>
        <th width="86"><strong>Tgl. Nota </strong></th>
        <th width="144"><strong>Pelanggan </strong></th>
        <th width="193"><strong>Keterangan</strong></th>
        <th width="123"><strong>Petugas</strong></th>
        <td colspan="2" align="center" bgcolor="#CCCCCC"><strong>Tools</strong></td>
      </tr>
      <?php
	$mySql = "SELECT penjualan.*, petugas.nm_petugas
				FROM penjualan 
				LEFT JOIN petugas ON penjualan.kd_petugas = petugas.kd_petugas
				ORDER BY penjualan.no_penjualan DESC LIMIT $hal, $row";
	$myQry = mysql_query($mySql, $koneksidb)  or die ("Query salah : ".mysql_error());
	$nomor = 0; 
	while ($myData = mysql_fetch_array($myQry)) {
		$nomor++;
		$Kode = $myData['no_penjualan'];
	?>
      <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $myData['no_penjualan']; ?></td>
        <td><?php echo IndonesiaTgl($myData['tgl_penjualan']); ?></td>
        <td><?php echo $myData['pelanggan']; ?></td>
        <td><?php echo $myData['keterangan']; ?></td>
        <td><?php echo $myData['nm_petugas']; ?></td>
        <td width="44" align="center"><a href="penjualan_nota.php?noNota=<?php echo $Kode; ?>" target="_blank">Nota</a></td>
        <td width="44" align="center"><a href="?page=Penjualan-Hapus&Kode=<?php echo $Kode; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENJUALAN INI ... ?')">Delete</a></td>
      </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr class="selKecil">
    <td>&nbsp;</td>
    <td width="299"><b>Jumlah Data :</b></td>
    <td width="480" align="right"><b>Halaman ke :</b>
      <?php
	for ($h = 1; $h <= $max; $h++) {
		$list[$h] = $row * $h - $row;
		echo " <a href='?page=Penjualan-Tampil&hal=$list[$h]'>$h</a> ";
	}
	?></td>
  </tr>
</table>
