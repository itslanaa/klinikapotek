<?php 
// koneksi database
include '../../../config/koneksi.php';
 

                            # Baca Variabel Form
                            $txtNomorRM     = $_POST['txtNomorRM'];
                            $txtTglDaftar   = $_POST['txtTglDaftar'];
                            $txtTglJanji    = $_POST['txtTglJanji'];
                            $txtJamJanji    = $_POST['txtJamJanji'];
                            $txtKeluhan     = $_POST['txtKeluhan'];
                            $cmbTindakan    = $_POST['cmbTindakan'];
                            
                            # JIKA ADA PESAN ERROR DARI VALIDASI
                            if (count($pesanError)>=1 ){
                                echo "<div class='mssgBox'>";
                                    $noPesan=0;
                                    foreach ($pesanError as $indeks=>$pesan_tampil) { 
                                    $noPesan++;
                                        echo "&nbsp;&nbsp; $noPesan. $pesan_tampil<br>";    
                                    } 
                                echo "</div> <br>"; 
                            }
                            else {
                                # SIMPAN DATA KE DATABASE. 
                                // Jika tidak menemukan error, simpan data ke database  
                                $userLogin  = $_SESSION['level']=!"admin";
                                $nomorAntri = nomorAntrian($txtTglJanji);
                                $kodeBaru   = buatKode("tb_pendaftaran", "");
                                $mySql  = "INSERT INTO tb_pendaftaran (no_daftar, no_rm, tgl_daftar, tgl_janji, jam_janji, 
                                                keluhan, kd_tindakan, no_antrian, kd_petugas) 
                                                VALUES ('$kodeBaru', '$txtNomorRM', '$txtTglDaftar', '$txtTglJanji', '$txtJamJanji', 
                                                '$txtKeluhan', '$cmbTindakan', '$nomorAntri', '$userLogin')";
                                $myQry  = mysqli_query($conn, $mySql) or die ("Gagal query".mysqli_error());
                                if($myQry){         
                                    // Menjalankan program cetak
                                    echo "<script>";
                                    echo "window.open('../cetak/pendaftaran_cetak.php?Kode=$kodeBaru', width=330,height=330,left=100, top=25)";
                                    echo "</script>";
                                    
                                    // Refresh halaman 
                                    echo "<meta http-equiv='refresh' content='0; url=#'>";
                                }
                                exit;
                            }   
                        } // Penutup Tombol Simpan
 
?>