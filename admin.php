<?php
session_start();
if( !isset($_SESSION['log']) ){
	header('location:login.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Admin TNGGP</title>
	<link rel="stylesheet" href="styleadmin.css">
	<link rel="icon" href="logoxampp.png">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<input type="checkbox" id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>
	<dv class="sidebar">
		<header>My App</header>
		<ul>
			<li><a href="datapendaki.php"><i class="fas fa-qrcode"></i>Data Pendaki</a></li>
			<li><a href="datakesehatanpendaki.php"><i class="fas fa-qrcode"></i>Data Kesehatan Pendaki</a></li>
			<li><a href="datapenyewaan.php"><i class="fas fa-qrcode"></i>Alat Pendakian</a></li>
			<li><a href="logout.php" class="fas fa-sign-out-alt" onclick="return confirm('yakin ingin logout?')"> Logout</a>
		</ul>
	</dv>
	<section></section>

</body>
</html>


