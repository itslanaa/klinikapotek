
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TRANSAKSI PENJUALAN - APOTEK KLINIK </title>
<link href="../styles/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/tigra_calendar/tcal.css" />
<script type="text/javascript" src="../plugins/tigra_calendar/tcal.js"></script> 
</head>
<body>


<?php 
# KONTROL MENU PROGRAM
if(isset($_GET['page'])) {
	// Jika mendapatkan variabel URL ?page
	switch($_GET['page']){				
		case 'Penjualan-Baru' :
			if(!file_exists ("penjualan_baru.php")) die ("Empty Main Page!"); 
			include "penjualan_baru.php";	break;
		case 'Pencarian-Obat' : 
			if(!file_exists ("pencarian_obat.php")) die ("Empty Main Page!"); 
			include "pencarian_obat.php";	break;
		case 'Penjualan-Tampil' : 
			if(!file_exists ("penjualan_tampil.php")) die ("Empty Main Page!"); 
			include "penjualan_tampil.php";	break;
		case 'Penjualan-Hapus' : 
			if(!file_exists ("penjualan_hapus.php")) die ("Empty Main Page!"); 
			include "penjualan_hapus.php";	break;
	}
}
else {
	include "penjualan_baru.php";
}
?>
</body>
</html>
