<?php
require 'functions.php';
// TAMBAH.PHP
// cek apakah tombol submit apakah sudah di tekan apa belum
if( isset($_POST["submit"]) ){



	// cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST) > 0 ){
		echo "
			<script>
				alert('data berhasil ditambahkan!');
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href ='booking.php';
		</script>
	";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style-form.css">
	<link rel="icon" href="logoxampp.png">
	<title>Pendaftaran TNGGP</title>
</head>
<body>
	
	<form action="" method="post" enctype="multipart/form-data">
	<section>
	<div class="container">
		<div id="header">
		<img src="logoxampp.png" width="50" height="50">  
			<h1>Form Pendaftaran Pendakian Gunung Gede Pangrango</h1>
			<p>Silakan Isi Formulir Secara Lengkap</p>
		</div>
		<div class="form-container">
			<form action="action.php" method="post" autocomplete="on" id="form1">
			<fieldset>
				<div class="form-grup">
					<div class="label">
						<label>Nama Lengkap</label>
					</div>
					<div class="input">
						<input type="text" name="nama" required placeholder="Isikan Nama Lengkap Anda"maxlength="30"autofocus  autocomplete="off">
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label>Nomer Handphone / WhatsApp</label>
					</div>
					<div class="input">
						<input type="text" name="nohp" required placeholder="Isikan dengan angka"maxlength="30"autofocus autocomplete="off" >
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label>Email</label>
					</div>
					<div class="input">
						<input type="Email" name="email" placeholder="mis. email@gmail.com" autocomplete="off">
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label> Foto KTP </label>
					</div>
					<div class="input">
						<label for="file-upload" class="upload-foto">Upload Foto</label>
						<input id="file-upload" type="file" name="ktp" >
					</div>
				</div>
				</div>
			</fieldset>
	
		<fieldset>
				<legend>Informasi Pendakian</legend>
				<div class="form-grup">
					<div class="label">
						<label>Naik Melalui Jalur</label>
					</div>
					<div class="input">
						<select name="naik" >
							<option value="cibodas">Cibodas</option>
							<option value="ciputri">CiPutri</option>
							<option value="salabintana">Salabintana</option>
						</select>
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label>Turun Melalui Jalur</label>
					</div>
					<div class="input">
						<select name="turun">
							<option value="cibodas">Cibodas</option>
							<option value="ciputi">CiPutri</option>
							<option value="salabintana">Salabintana</option>
						</select>
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label> Tanggal Keberangkatan </label>
					</div>
					<div class="input">
						<input type="date" name="berangkatnaik" required>
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label> Tanggal Kembali Turun </label>
					</div>
					<div class="input">
						<input type="date" name="berangkatturun" required>
					</div>
				</div>
			</fieldset>

			<div class="form-grup">
			<button type="submit" name="submit"><img src="ceklis.jpg" width="20" height="20">KIRIM</button>
		</div>
		<button type="kembali"><a href="datapendaki.php">Kembali</button>
		<p>
		<input type="reset" name="reset" value="Bersihkan">
		<p>
 		<button type="print"> <a href="booking.php" onClick="window.print();">Print/Cetak</button>




		</form>
		</div>

	</div>
</section>


	<!---footer-->
	<footer>
		<div class="container">
			<small></small>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
	
</body>
</html>