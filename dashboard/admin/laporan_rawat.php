<?php 
include_once '../../config/koneksi.php';

if (isset($_POST['submit'])) {
 $date1 = $_POST['date1'];
 $date2 = $_POST['date2'];

 if (!empty($date1) && !empty($date2)) {
  // perintah tampil data berdasarkan range tanggal
  $q = mysqli_query($conn, "SELECT * FROM tb_tambah WHERE grawat BETWEEN '$date1' and '$date2'"); 
 } else {
  // perintah tampil semua data
  $q = mysqli_query($conn, "SELECT * FROM tb_tambah ORDER BY nrawat"); 
 }
} else {
 // perintah tampil semua data
 $q = mysqli_query($conn, "SELECT * FROM tb_tambah ORDER BY nrawat");
}

// hitung jumlah baris data
$s = $q->num_rows;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laporan Rawat Pasien - Klinik Apotek</title>
    <link href="../../assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../../assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">
<?php 
    session_start();

    // cek apakah yang mengakses halaman ini sudah login sebagai admin
    if($_SESSION['level']!="admin"){
        header("location:../../auth/login?pesan=belum_login");
    }
?>
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-clinic-medical"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Klinik <sup>Apotek</sup></div>
            </a>
            <hr class="sidebar-divider my-0">

            <li class="nav-item active">
                <a class="nav-link" href="index">
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
                        <a class="collapse-item" href="tindakan_data">Data Tindakan</a>
                        <a class="collapse-item" href="petugas_data">Data Petugas</a>
                        <a class="collapse-item" href="dokter_data">Data Dokter</a>
                        <a class="collapse-item" href="obat_data">Data Obat</a>
                        <a class="collapse-item" href="pasien_data">Data Pasien</a>
                    </div>
                </div>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="pendaftaran/">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Pendaftaran Pasien</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rawat-pasien/">
                    <i class="fas fa-fw fa-share-square"></i>
                    <span>Rawat Jalan Pasien</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="penjualan/">
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
                        <a class="collapse-item" href="laporan_tindakan">Laporan Data Tindakan</a>
                        <a class="collapse-item" href="laporan_petugas">Laporan Data Petugas</a>
                        <a class="collapse-item" href="laporan_dokter">Laporan Data Dokter</a>
                        <a class="collapse-item" href="laporan_obat">Laporan Data Obat</a>
                        <a class="collapse-item" href="laporan_pasien">Laporan Data Pasien</a>
                        <a class="collapse-item" href="laporan_pendaftaran">Laporan Data Pendaftaran</a>
                        <a class="collapse-item" href="laporan_rawat">Laporan Data Rawat</a>
                        <a class="collapse-item" href="laporan_penjualan">Laporan Data Penjualan</a>
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
                     <ul class="navbar-nav ml-auto">
                        <?php
                        $login = mysqli_query($conn, "select * from tb_petugas WHERE id_petugas='1'");
                        while($rows=mysqli_fetch_array($login)){
                        ?>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dopdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>
                                      <?php echo $rows['nama']; ?> <?php } // end loop ?>
                                    </span>
                                <img class="img-profile rounded-circle"
                                    src="../../assets/dashboard/img/undraw_profile.svg">
                            </a>
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
                            <h6 class="m-0 font-weight-bold text-primary">Laporan Rawat Pasien</h6>
                        </div>

                        <div class="card-body">
							<div class="row">
								<div class="col-md-4 pt-2">
									<span>Jumlah data: <b><?= $s ?></b></span>
								</div>
								<div class="col-md-8">
									<form method="POST" action="" class="form-inline mt-2 mb-4">
                                <label for="date1" class="mx-2">Tanggal mulai</label>
                                    <input type="date" name="date1" id="date1" class="form-control mr-2">
                                <label for="date2" class="mx-2">sampai</label>
                                    <input type="date" name="date2" id="date2" class="form-control mr-2">
                                <button type="submit" name="submit" class="btn btn-primary">Cari</button>
                                </form>
								</div>
							</div>
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tgl. Rawat</th>
                                            <th>Nama Pasien</th>
                                            <th>Tindakan</th>
                                            <th style="text-align:center;">Cetak</th>
                                        </tr>
                                    </thead>
                   
                                    <tbody>
                                        <?php
						
										$nomor = 1;
										while ($rw = $q->fetch_assoc()) {
										?>
                                        <tr>
                                            <td><?= $nomor++ ?></td>
                                            <td><?= date('d-M-Y', strtotime($rw['grawat'])) ?></td>
                                            <td> <?= $rw['norem']; ?> / <?= $rw['name']; ?></td>
                                            <td><?= $rw['tinpas']; ?></td>
                                            <td align="center"><a href="rawat-pasien/rawat_nota.php?id=<?= $rw['nrawat']; ?>" class="btn btn-outline-info"><i class="fas fa-print"></i></td></a>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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
                    <a class="btn btn-primary" href="../../auth/login?pesan=keluar">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../../assets/dashboard/js/sb-admin-2.min.js"></script>
    <script src="../../assets/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/dashboard/js/demo/datatables-demo.js"></script>

</body>
</html>