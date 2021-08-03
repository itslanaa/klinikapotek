<?php 
include_once '../../../config/koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Penjualan Baru - Klinik Apotek</title>
    <link href="../../../assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../../../assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body id="page-top">
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
                            <h6 class="m-0 font-weight-bold text-primary">Penjualan Obat</h6>
                        </div>
                        <div class="card-body">
                            <?php
                            error_reporting(0);
include_once "../../../config/koneksi.php";
 $kode = mysqli_query($conn, "SELECT * FROM tb_penjualan");
                       $num = mysqli_num_rows($kode);
                       $jmlh = $num+1;
                       $dataKode = "PN000".$jmlh;


                       if (isset($_POST['btnTambah'])) {
                           
                        $no = $_POST['txtNomor'];
                        $tgl = $_POST['txtTanggal'];
                        $pel =$_POST['txtPelanggan'];
                        $ket = $_POST['txtKeterangan'];
                        $obat = $_POST['txtKodeObat'];
                        $bayar = $_POST['txtBayar'];

                        $insert = mysqli_query($conn, "INSERT INTO tb_penjualan VALUES(
                                                '".$no."',
                                                 '".$tgl."',
                                                  '".$pel."',
                                                   '".$ket."',
                                                    '".$obat."',
                                                         '".$bayar."')");
                        if ($insert) {
                            header("berhasil menyimpan");
                            echo "<script>window.location='index.php?p=penjualan_baru&id=$insert'</script>";
                        }else{
                            echo 'Gagal'.mysqli_error($conn);
                        }



                       }


?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <table width="800" cellpadding="3" cellspacing="1"  class="table-list">
    <tr>
      <td bgcolor="#CCCCCC"><strong>DATA PENJUALAN </strong></td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="26%"><strong>No. Penjualan </strong></td>
      <td width="2%"><strong>:</strong></td>
      <td width="72%"><input name="txtNomor" value="<?php echo $dataKode ?>" size="23" maxlength="23" readonly="readonly"/></td>
    </tr>
    <tr>
      <td><strong>Tgl. Penjualan </strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtTanggal" type="text" class="tcal" value="<?php echo date('Y:m:d')?>" size="23" maxlength="23" /></td>
    </tr>
    <tr>
      <td><strong>Pelanggan</strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtPelanggan" value="" size="70" maxlength="100" /></td>
    </tr>
    <tr>
      <td><strong>Keterangan</strong></td>
      <td><strong>:</strong></td>
      <td><input name="txtKeterangan" value="" size="70" maxlength="100" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>INPUT  OBAT </strong></td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Kode Obat </strong></td>
      <td><strong>:</strong></td>
      <td><b>
        <input name="txtKodeObat" size="40" maxlength="20" />
        <a href="pencarian_obat.php" target="_blank">Pencarian Obat</a></b></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC"><strong>Uang Pembeli</strong></td>
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><strong>Total Uang </strong></td>
      <td><strong>:</strong></td>
      <td><b>
        <input name="txtBayar" size="40" maxlength="20" />
    </tr>
     <td><b>
        <input name="btnTambah" type="submit" style="cursor:pointer;" value=" Tambah " />
    </tr>
  </table>
  <br>
  <table class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
    <tr>
      <th colspan="7">DAFTAR OBAT </th>
    </tr>
    <tr>
      <td width="29" bgcolor="#CCCCCC"><strong>No</strong></td>
      <td width="85" bgcolor="#CCCCCC"><strong>Kode</strong></td>
      <td width="432" bgcolor="#CCCCCC"><strong>Nama Obat </strong></td>
      <td width="85" align="right" bgcolor="#CCCCCC"><strong>Harga (Rp) </strong></td>
      <td width="100" align="right" bgcolor="#CCCCCC"><strong>Sub Total(Rp) </strong></td>
      <td width="22" align="center" bgcolor="#CCCCCC">&nbsp;</td>
    </tr>
    <?php 
include_once '../../../config/koneksi.php';
error_reporting(0);
                              $ubah = mysqli_query($conn, "SELECT * FROM tb_penjualan LEFT JOIN tb_obat USING (kd_obat) ORDER BY no_penjualan = '".$_GET['id']."'");
                              
                              $no++;
                              $u     = mysqli_fetch_object($ubah);
                              

?>
    <tr>
      <td><?php echo $no; ?></td>
      <td></b><?php echo $u->no_penjualan ?></td>
      <td><?php echo $u->nm_obat ?></td>
      <td align="right"><?php echo number_format($u->harga_jual) ?></td>
      <td><a href="penjualan_hapus.php?id=<?php echo $u->no_penjualan ?>" target="_self">Delete</a></td>
      <td><a href="penjualan_nota.php?id=<?php echo $u->no_penjualan ?>" target="_self">Print</a></td>
    </tr>

    <tr>
      <td colspan="4" align="right" bgcolor="#F5F5F5"><strong>GRAND TOTAL   (Rp.):<?php echo number_format($u->harga_jual) ?> </strong></td>
      <td align="right" bgcolor="#F5F5F5"><strong></strong></td>
      <td align="right" bgcolor="#F5F5F5"><strong></strong></td>
      <td bgcolor="#F5F5F5">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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