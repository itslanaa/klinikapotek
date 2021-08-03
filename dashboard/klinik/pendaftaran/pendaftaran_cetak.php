<?php
include '../../../config/koneksi.php';

if (isset($_GET['idp'])) {
                              $ubah = mysqli_query($conn, "SELECT * FROM tb_pendaftaran LEFT JOIN tb_tindakan USING (kd_tindakan) LEFT JOIN tb_pasien USING (no_rm) WHERE id_daftar = '".$_GET['idp']."'");


                              $u     = mysqli_fetch_object($ubah);
  
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cetak Antrian Pendaftaran | Klinik & Apotek </title>
<link href="../styles/styles_cetak.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	window.print();
	window.onfocus=function(){ window.close();}
</script>
</head>
<body onLoad="window.print()">
  <h2> ANTRIAN PENDAFTARAN </h2>
  <table width="400" cellpadding="4" cellspacing="2" class="table-list">
  <tr>
    <td width="35%"><strong>No Daftar </strong></td>
    <td width="5%"><strong>:</strong></td>
    <td width="60%"><?php echo $u->no_daftar ?></td>
  </tr>
  <tr>
    <td><strong>Nomor RM </strong></td>
      <td><strong>:</strong></td>
    <td><?php echo $u->no_rm ?></td>
    </tr>
  <tr>
      <td><strong>Nama Pasien </strong></td>
    <td><strong>:</strong></td>
    <td><?php echo $u->nm_pasien ?></td>
  </tr>
  <tr>
    <td><strong>Tgl.  Daftar </strong></td>
      <td><strong>:</strong></td>
    <td><?php echo $u->tgl_daftar ?></td>
    </tr>
  <tr>
    <td><strong>Tgl. Jam Janji </strong></td>
      <td><strong>:</strong></td>
    <td><?php echo $u->tgl_janji ?>, 
        <?php echo $u->jam_janji ?></td>
    </tr>
  <tr>
    <td><strong>Keluhan Pasien </strong></td>
      <td><strong>:</strong></td>
    <td><?php echo $u->keluhan ?></td>
  </tr>
  <tr>
    <td><strong>Tindakan Pasien </strong></td>
      <td><strong>:</strong></td>
    <td><?php echo $u->nm_tindakan ?></td>
    </tr>
</table>

</body>
</html>
