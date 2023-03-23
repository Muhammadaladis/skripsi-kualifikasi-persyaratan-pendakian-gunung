<?php
session_start();
if( !isset($_SESSION['log']) ){
	header('location:login.php');
	exit;
}
?>

<?php
require 'functions.php';
$pendakian = query("SELECT * FROM pendakian");

// tombol cari ditekan
if( isset($_POST["cari"]) ){
    $pendakian = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>halaman admin</title>
</head>
    <link rel="icon" href="logoxampp.png">
<body>
    <center><h1> Data Penyewaan Alat Pendakian </h1></center>
    <center><a href="inputalat.php"> Input Alat Pendakian </a></center>
    <br>
    <br>
    <center><a href=""> Data Peminjaman dan Pengembalian </a></center>
    <br>
    <br>
    <center><a href="admin.php"> Kembali Ke Halaman Admin </a></center>
    <br><br>



<script src="js/script.js"></script>
</body>
</html>
