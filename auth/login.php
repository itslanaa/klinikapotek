<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Management App</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
</head>
<body>
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
            <a class="navbar-brand" href="#">
                <span class="text-dark h4">Klinik Apotek</span> <span class="text-primary h4"><sup>App</sup></span>
            </a>
        </div>
    </nav>
<div class="global-container">
    <div class="card login-form">
    <div class="card-body">
        <h3 class="card-title text-center">Login Area</h3>
        <?php 
        if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "belum_login"){
                echo "<script>alert('Anda harus login terlebih dahulu!');</script>";
            }else if($pesan == "gagal"){
                echo "<div class='alert alert-danger'>Username dan Password tidak sesuai!</div>";
            }else if($pesan == "keluar"){
                echo "<div class='alert alert-success'>Anda berhasil logout!</div>";
            }
        }
        ?>
        <div class="card-text">
            <form action="cek_login.php" method="post" onSubmit="return validasi()">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control form-control-sm" id="username" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <a href="javascript:alert('Oops! anda tidak dapat mengakses halaman ini! silahkan hubungi admin untuk mendaftar');" style="float:right;font-size:12px;">Lupa Password?</a>
                    <input type="password" name="password" class="form-control form-control-sm" id="password">
                </div>
                <div class="form-group">
                <button type="submit" value="LOGIN" class="btn btn-primary btn-block">Masuk</button>
                
                <div class="sign-up">
                    Belum punya akun? <a href="javascript:alert('Oops! anda tidak dapat mengakses halaman ini! silahkan hubungi admin untuk mendaftar');">Daftar</a>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>
</div>
<div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
         <a href="https://km-dev.or.id">KM Developer</a>.
            </p>
          </div>
        </div>
</div>
</body>

<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;       
        if (username != "" && password!="") {
            return true;
        }else{
            alert('Username dan Password tidak boleh kosong!');
            return false;
        }
    }
</script>
</html>