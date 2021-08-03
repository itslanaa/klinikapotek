<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cetak Data Dokter - Klinik Apotek</title>

    <!-- Custom fonts for this template-->
    <link href="../../../assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- DataTales Example -->
                    <?php
                    include '../../../config/koneksi.php';
                    $id = $_GET['id'];
                    $data_dokter = mysqli_query($conn,"select * from tb_dokter WHERE kd_dokter='$id'")or die(mysql_error());
                    while($dd = mysqli_fetch_array($data_dokter)){
                    ?>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <img width="300" src="../../../assets/img/logo.png">
                        </div>
                        <div class="card-body">
                                <div class="row pb-5 p-5">
                                    <div class="col-md-6">
                                        <p class="font-weight-bold mb-4">Informasi Dokter</p>
                                        <p class="mb-1"><?php echo $dd['nm_dokter']; ?></p>
                                        <p><?php echo $dd['jns_kelamin']; ?></p>
                                        <p class="mb-1"><?php echo $dd['tempat_lahir']; ?>, <?php echo $dd['tanggal_lahir']; ?></p>
                                        <p class="mb-1"><?php echo $dd['alamat']; ?></p>
                                     </div>
                                     <div class="col-md-6 text-right">
                                        <p class="font-weight-bold mb-4">Informasi Lainnya</p>
                                        <p class="mb-1"><span class="text-muted">Kode Dokter: </span> <?php echo $dd['kd_dokter']; ?></p>
                                        <p class="mb-1"><span class="text-muted">Spesialisasi: </span> <?php echo $dd['spesialisasi']; ?></p>
                                        <p class="mb-1"><span class="text-muted">No.Telp: </span> <?php echo $dd['no_telp']; ?></p>
                                    </div>
                                        <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                       <span></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    <!-- Print -->
    <script type="text/javascript">
        window.print()
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="../../../assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../assets/dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../../assets/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../assets/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../assets/dashboard/js/demo/datatables-demo.js"></script>

</body>

</html>