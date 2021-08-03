<?php 
include_once '../../../config/koneksi.php';
                 error_reporting(0);
                $ubah = mysqli_query($conn, "SELECT * FROM tb_pasien LEFT JOIN tb_rawat USING (no_rm) WHERE no_rm = '".$_GET['id']."'");
                              
                              $u     = mysqli_fetch_object($ubah);        
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rawat Baru - Klinik Apotek</title>
    <link href="../../../assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../../../assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
<?php 
    session_start();

    // cek apakah yang mengakses halaman ini sudah login sebagai admin
    if($_SESSION['level']!="admin"){
        header("location:../../../auth/login?pesan=belum_login");
    }
?>
    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-clinic-medical"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Klinik <sup>Apotek</sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="../index">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                menu
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../tindakan_data">Data Tindakan</a>
                        <a class="collapse-item" href="../petugas_data">Data Petugas</a>
                        <a class="collapse-item" href="../dokter_data">Data Dokter</a>
                        <a class="collapse-item" href="../obat_data">Data Obat</a>
                        <a class="collapse-item" href="../pasien_data">Data Pasien</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../pendaftaran">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Pendaftaran Pasien</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../rawat-pasien/">
                    <i class="fas fa-fw fa-share-square"></i>
                    <span>Rawat Jalan Pasien</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="../penjualan/">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Penjualan Apotek</span></a>
            </li>


            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                other
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Laporan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../laporan_tindakan">Laporan Data Tindakan</a>
                        <a class="collapse-item" href="../laporan_petugas">Laporan Data Petugas</a>
                        <a class="collapse-item" href="../laporan_dokter">Laporan Data Dokter</a>
                        <a class="collapse-item" href="../laporan_obat">Laporan Data Obat</a>
                        <a class="collapse-item" href="../laporan_pasien">Laporan Data Pasien</a>
                        <a class="collapse-item" href="../laporan_pendaftaran">Laporan Data Pendaftaran</a>
                        <a class="collapse-item" href="../laporan_rawat">Laporan Data Rawat</a>
                        <a class="collapse-item" href="../laporan_penjualan">Laporan Data Penjualan</a>
                    </div>
                </div>
            </li>


            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                     <ul class="navbar-nav ml-auto">
                        <?php
                        $login = mysqli_query($conn, "select * from tb_petugas WHERE id_petugas='1'");
                        while($rows=mysqli_fetch_array($login)){
                        ?>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dopdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>
                                      <?php echo $rows['nama']; ?> <?php } // end loop ?>
                                    </span>
                                <img class="img-profile rounded-circle"
                                    src="../../../assets/dashboard/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Pengaturan
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Log Aktivitas
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../auth/login?pesan=keluar" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Rawat Jalan Pasien</h6>
                        </div>
                        <div class="card-body">
                      	<?php
include_once "../../../config/koneksi.php";

# HAPUS DAFTAR tindakan DI TMP

// =========================================================================

# TOMBOL TAMBAH DIKLIK


	# BACA VARIABEL DARI FORM INPUT tindakan
	

	# JIKA ADA PESAN ERROR DARI VALIDASI
	
		// Membaca data bagi hasil yang diberikan kepada Dokter
		

		# SIMPAN DATA KE DATABASE (tmp_rawat)
		# Jika jumlah error pesanError tidak ada, skrip di bawah dijalankan
				

	

# ========================================================================================================
# JIKA TOMBOL SIMPAN TRANSAKSI DIKLIK

	# Validasi jika belum ada satupun data item yang dimasukkan
	

	# Baca variabel
	
			
	# JIKA ADA PESAN ERROR DARI VALIDASI
	
		# SIMPAN KE DATABASE
		# Jika jumlah error pesanError tidak ada, maka proses Penyimpanan akan dikalkukan
		
		// Membuat kode Transaksi baru
		
		
		// Skrip menyimpan data ke tabel transaksi utama
		

		# Ambil semua data tindakan/tindakan yang dipilih, berdasarkan user yg login
		
			
			// Masukkan semua tindakan dari TMP ke tabel rawat detail
			
			
		# Kosongkan Tmp jika datanya sudah dipindah
		
		
		// Jalankan skrip Nota
	
		
		// Refresh form
		

	

// Membaca Nomor RM data Pasien


# Kode pasien
                       $kode = mysqli_query($conn, "SELECT * FROM tb_tambah");
                       $num = mysqli_num_rows($kode);
                       $jmlh = $num+1;
                       $dataKode = "NR000".$jmlh;


            if (isset($_POST['btnSimpan'])) {

                $rawat = $_POST['txtNomor'];
                $tgl = $_POST['txtTanggal'];
                $rm = $_POST['txtNomorRM'];
                $pasien = $_POST['txtPasien'];
                $diag = $_POST['txtDiagnosa'];
                $uang = $_POST['txtUangBayar'];
                $cd = $_POST['cmbDokter'];
                $ct = $_POST['cmbTindakan'];
                $harga = $_POST['txtHarga'];

                $dataKode= 0;
                $simpan = mysqli_query($conn, "INSERT INTO tb_tambah VALUES(
                                null,
                                '".$rawat."',
                                '".$tgl."',
                                '".$rm."',
                                '".$pasien."',
                                '".$diag."',
                                '".$uang."',
                                '".$cd."',
                                '".$ct."',
                                '".$harga."')");
                if ($simpan) {
                    header("Hasil Transaksi Ada DI Bawah");
                    echo "<script>window.location='rawat_baru.php?id=$rawat'</script>";
                }else{
                    echo "Gagal".mysqli_error($conn);
                }
                // code...
            }





# MEMBACA DATA DARI FORM UTAMA TRANSAKSI, Nilai datanya dimasukkan kembali ke Form utama DATA TRANSAKSI

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <table width="800" cellspacing="1"  class="table-list">
    <tr>
      <td bgcolor="#CCCCCC"><strong>DATA RAWAT </strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="26%"><strong>No. Rawat </strong></td>
      <td width="1%"><strong>:</strong></td>
      <td width="73%"><input name="txtNomor" value="<?php  echo $dataKode ?>" size="23" maxlength="20" readonly="readonly"/></td>
    </tr>
    <tr>
      <td><strong>Tgl. Rawat </strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtTanggal" type="text" class="tcal" value="<?php echo date("Y-m-d") ?>" size="23" readonly="readonly"/></td>
    </tr>
    <tr>
      <td><strong>Nomor RM </strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtNomorRM" value="<?php echo $u->no_rm ?>" size="23" maxlength="20" />
        * pilih dari <a href="pencarian_pasien.php" target="_self">daftar pasien</a>, lalu klik menu <strong>Rawat</strong> </td>
    </tr>
    <tr>
      <td><strong>Nama Pasien </strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtPasien" value="<?php echo $u->nm_pasien ?>" size="80" maxlength="100" readonly="readonly"/></td>
    </tr>
    <tr>
      <td><strong>Hasil Diagnosa Dokter </strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtDiagnosa" value="<?php echo $u->hasil_diagnosa ?>" size="80" maxlength="100" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Uang Bayar/ DP (Rp.) </strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtUangBayar" value="<?php echo $u->uang_bayar ?>" size="23" maxlength="23"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>INPUT TINDAKAN </strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Dokter </strong></td>
      <td><strong>:</strong></td>
      <td><select name="cmbDokter">
          <option value="KOSONG">....</option>
          <?php
	  $bacaSql = "SELECT * FROM tb_dokter ORDER BY kd_dokter";
	  $bacaQry = mysqli_query($conn, $bacaSql);
	  while ($bacaData = mysqli_fetch_array($bacaQry)) {
		if ($bacaData['kd_dokter'] == $dataDokter) {
			$cek = " selected";
		} else { $cek=""; }
		
		echo "<option value='$bacaData[nm_dokter]' $cek> $bacaData[nm_dokter]</option>";
	  }
	  ?>
        </select> </td>
    </tr>
    <tr>
      <td><strong>Tindakan Pasien </strong></td>
      <td><strong>:</strong></td>
      <td><select name="cmbTindakan">
        <option value="KOSONG">....</option>
         <?php
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_tindakan ORDER BY kd_tindakan DESC");
                        while($r = mysqli_fetch_array($kategori)){

                        ?>
                        <option value="<?php echo  $r['nm_tindakan'] ?>"><?php echo $r['nm_tindakan']  ?></option>
                        
                        <?php } ?>
      </select> </td>
    </tr>
    <tr>
      <td><strong>Harga Tindakan (Rp) </strong></td>
      <td><strong>:</strong></td><
      <td><b><br>
      	<br>
        <input name="txtHarga"><br>
        <br>
      </b></td>
    </tr>
    <tr>
      <td><input name="btnSimpan" type="submit" style="cursor:pointer;" value=" SIMPAN TRANSAKSI " /></td>
    </tr>
  </table>
  <br>
  <table class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
    <tr>
      <th colspan="6"><strong>DAFTAR TINDAKAN </strong></th>
    </tr>
    <tr>
      <td width="27" bgcolor="#CCCCCC"><strong>No</strong></td>
      <td width="58" bgcolor="#CCCCCC"><strong>Kode </strong></td>
      <td width="365" bgcolor="#CCCCCC"><strong>Nama Tindakan </strong></td>
      <td width="190" bgcolor="#CCCCCC"><strong>Dokter</strong></td>
      <td width="90" align="right" bgcolor="#CCCCCC"><strong>Harga (Rp) </strong></td>
      <td width="90" align="right" bgcolor="#CCCCCC"><strong>Action</strong></td>
      <td width="39">&nbsp;</td>
    </tr>
    <?php
    include_once "../../../config/koneksi.php";
    error_reporting(0);
    $ubah = mysqli_query($conn, "SELECT * FROM tb_tambah ORDER BY nrawat  = '".$_GET['id']."' ");
      
     $nomor++;                             
     $u     = mysqli_fetch_object($ubah);

?>
	  <tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $u->no_rm ?></td>
		<td><?php echo $u->tinpas ?></td>
		<td><?php echo $u->dokter ?></td>
		<td align="right"><?php echo number_format($u->hartin) ?></td>
		<td align="right"><a href="rawat_hapus?id=<?php echo $u->nrawat ?>" target="_self">Delete</a></td>
        <td align="right"><a href="rawat_nota.php?id=<?php echo $u->nrawat ?>" target="_self">Print</a></td>

	  </tr>
    <tr>
      <td colspan="4" align="right"><b> GRAND TOTAL  : </b></td>
      <td align="left" bgcolor="#CCCCCC"><strong>Rp. <?php echo number_format($u->hartin) ?></strong></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
           
     </div>
           </div>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                       <span>Copyright &copy; 2021 All Rights Reserved by <a href="https://km-dev.or.id">KM Developer</a>.</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">klik "Keluar" dibawah ini jika Anda siap untuk mengakhiri sesi anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../../auth/login?pesan=keluar">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../../../assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../../assets/dashboard/js/sb-admin-2.min.js"></script>
    <script src="../../../assets/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../../../assets/dashboard/js/demo/datatables-demo.js"></script>

</body>
</html>