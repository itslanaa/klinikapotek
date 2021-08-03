<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['login']);
session_destroy();
header("Location:login?pesan=keluar");
?>