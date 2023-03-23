<?php session_start();?>
<!DOCTYPE html>
<html lang="end" dir="ltr">
<head>
	<title>Login Admin TNGGP</title>
	<meta charset="utf-9">
	<link rel="icon" href="logoxampp.png">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<li><a href="adis.php">HOME</a></li>
<form method="POST">
	<div class="login-box">
		<h1>Login</h1>
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="text" name="username" autocomplete="off">
		</div>
		<div class="textbox">
			<i class="fas fa-user"></i>
			<input type="password" name="password">
		</div>
		<input type="submit" class="btn"  name="login" value="Login">
	</div>
	</form>
	<?php
		if( isset($_POST['login']) ){
			include"koneksi.php";
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$cek_user = mysqli_query( $conn,"SELECT * FROM `login` WHERE username='$username'");
			$row 	  = mysqli_num_rows($cek_user);

			if( $row === 1 ){
				//jalankan prosedur seleksi password
				$fetch_password = mysqli_fetch_assoc($cek_user);
				$cek_pass  	= $fetch_password['password'];
				if( $cek_pass <> $password ){
					echo"<script>alert('password salah atau belum terdaftar');</script>";
				}else{
					$_SESSION['log'] = true;
					echo"<script>alert('login berhasil');document.location.href='admin.php'</script>";
				}
			}else{
				echo"<script>alert('username salah atau belum terdaftar');</script>";
			}
		}
	?>
</body>
</html>