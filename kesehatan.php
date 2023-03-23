<?php
require 'functions.php';
// TAMBAH.PHP
// cek apakah tombol submit apakah sudah di tekan apa belum
if( isset($_POST["submit"]) ){
	$jantung = $_POST["kesehatan_jantung"];
	$ginjal = $_POST["kesehatan_ginjal"];
	$asma = $_POST["kesehatan_asma"];
	$hipertensi = $_POST["kesehatan_hipertensi"];
	$epilepsi = $_POST["kesehatan_epilepsi"];
	$maag = $_POST["kesehatan_maag"];
	$ambeien = $_POST["kesehatan_ambeien"];
	$asamurat = $_POST["kesehatan_asamurat"];
	$pen = $_POST["kesehatan_pen"];

	if ($jantung == "SEHAT") {
		$nilai1 = 1;
	}else {
		$nilai1 = 0;
	}

	if ($ginjal == "SEHAT") {
		$nilai2 = 1;
	}else {
		$nilai2 = 0;
	}

	if ($asma == "SEHAT") {
		$nilai3 = 1;
	}else {
		$nilai3 = 0;
	}

	if ($hipertensi == "SEHAT") {
		$nilai4 = 1;
	}else {
		$nilai4 = 0;
	}

	if ($epilepsi == "SEHAT") {
		$nilai5 = 1;
	}else {
		$nilai5 = 0;
	}

	if ($maag == "SEHAT") {
		$nilai6 = 1;
	}else {
		$nilai6 = 0;
	}

	if ($ambeien == "SEHAT") {
		$nilai7 = 1;
	}else {
		$nilai7 = 0;
	}

	if ($asamurat == "SEHAT") {
		$nilai8 = 1;
	}else {
		$nilai8 = 0;
	}

	if ($pen == "SEHAT") {
		$nilai9 = 1;
	}else {
		$nilai9 = 0;
	}

	$nilaiakhir = $nilai1 + $nilai2 + $nilai3 + $nilai4 + $nilai5 + $nilai6 + $nilai7 + $nilai8 + $nilai9;

	if ($nilaiakhir < 8) {
		echo "
			<script>
				alert('Mohon Maaf, Anda tidak sehat!');
            document.location.href ='kesehatan.php';
			</script>
		";
		return false;
	}else {
		// cek apakah data berhasil ditambahkan atau tidak
		if( kesehatan($_POST) > 0 ){
			echo "
				<script>
					alert('data berhasil ditambahkan!');
				document.location.href ='booking.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('data gagal ditambahkan!');
					document.location.href ='kesehatan.php';
			</script>
		";
		}
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
	<link rel="icon" href="logosehat.png">
	<title>KESEHATAN TNGGP</title>
</head>
<body>
	
	<form action="" method="post" enctype="multipart/form-data">
	<section>
	<div class="container">
		<div id="header">
		<img src="logosehat.png" width="50" height="50">  
			<h1>PENGISIAN FORM KESEHATAN PENDAKIAN GUNUNG GEDE PANGRANGO</h1>
			<p>Silakan Isi Formulir Ini Dengan Lengkap dan Tepat! Keselamatan Anda di Tangan Anda Sendiri!!</p>
		</div>
		<div class="form-container">
			<form action="action.php" method="post" autocomplete="on" id="form1">
			<fieldset>
				<div class="form-grup">
            <div class="label">
						<label>Nama Lengkap</label>
					</div>
					<div class="input">
						<input type="text" name="namalk" required placeholder="Tuliskan Nama Lengkap Anda"maxlength="30"autofocus  autocomplete="off">
					</div>
					<div class="label">
						<label>Apakah Anda Sehat Dari Penyakit Jantung?</label>
					</div>
					<div class="input">
					<P><input type='radio' name='kesehatan_jantung' value='SEHAT' required />SEHAT</p>
     				<p><input type='radio' name='kesehatan_jantung' value='TIDAK' required />TIDAK</p>
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label>Apakah Anda Sehat dari Gangguan Ginjal?</label>
					</div>
					<div class="input">
					<P><input type='radio' name='kesehatan_ginjal' value='SEHAT' required />SEHAT</p>
     				<p><input type='radio' name='kesehatan_ginjal' value='TIDAK' required />TIDAK</p>
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label>Apakah Anda Sehat dari Gangguan Asma?</label>
					</div>
					<div class="input">
					<P><input type='radio' name='kesehatan_asma' value='SEHAT' required />SEHAT</p>
     				<p><input type='radio' name='kesehatan_asma' value='TIDAK' required />TIDAK</p>
					</div>
				</div>
			</fieldset>
	
		<fieldset>
				<div class="form-grup">
					<div class="label">
						<label>Apakah Anda Sehat dari Gangguan Hipertensi?</label>
					</div>
					<div class="input">
					<P><input type='radio' name='kesehatan_hipertensi' value='SEHAT' required />SEHAT</p>
     				<p><input type='radio' name='kesehatan_hipertensi' value='TIDAK' required />TIDAK</p>
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label>Apakah Anda Sehat dari Gangguan Epilepsi?</label>
					</div>
					<div class="input">
					<P><input type='radio' name='kesehatan_epilepsi' value='SEHAT' required />SEHAT</p>
     				<p><input type='radio' name='kesehatan_epilepsi' value='TIDAK' required />TIDAK</p>
					</div>
				</div>
            <div class="form-grup">
					<div class="label">
						<label>Apakah Anda Sehat dari Gangguan Maag Kronis?</label>
					</div>
					<div class="input">
					<P><input type='radio' name='kesehatan_maag' value='SEHAT' required />SEHAT</p>
     				<p><input type='radio' name='kesehatan_maag' value='TIDAK' required />TIDAK</p>
					</div>
				</div>
            <div class="form-grup">
					<div class="label">
						<label>Apakah Anda Sehat dari Gangguan Ambeien?</label>
					</div>
					<div class="input">
					<P><input type='radio' name='kesehatan_ambeien' value='SEHAT' required />SEHAT</p>
     				<p><input type='radio' name='kesehatan_ambeien' value='TIDAK' required />TIDAK</p>
					</div>
				</div>
            <div class="form-grup">
					<div class="label">
						<label>Apakah Anda Sehat dari Gangguan Asam Urat?</label>
					</div>
					<div class="input">
					<P><input type='radio' name='kesehatan_asamurat' value='SEHAT' required />SEHAT</p>
     				<p><input type='radio' name='kesehatan_asamurat' value='TIDAK' required />TIDAK</p>
					</div>
				</div><div class="form-grup">
					<div class="label">
						<label>Adanya PEN dalam tubuh kurang dari 2 tahun (akibat patah tulang)?</label>
					</div>
					<div class="input">
					<P><input type='radio' name='kesehatan_pen' value='SEHAT' required />SEHAT</p>
     				<p><input type='radio' name='kesehatan_pen' value='TIDAK' required />TIDAK</p>
					</div>
				</div>
            <div class="form-grup">
					<div class="label">
						<label> Upload FOTO SURAT SEHAT ANDA DARI PUKESMAS! </label>
					</div>
					<div class="input">
						<label for="file-upload" class="upload-foto">Upload Foto</label>
						<input id="file-upload" type="file" name="ktp" >
					</div>
				</div>
				</div>
			</fieldset>

			<div class="form-grup">
			<button type="submit" name="submit"><img src="ceklis.jpg" width="20" height="20">KIRIM</button>
		</div>
		<button type="kembali"><a href="adis.php">Kembali</button>
		<p>
		<input type="reset" name="reset" value="Bersihkan">
		<p>
 		<button type="print"> <a href="kesehatan.php" onClick="window.print();">Print/Cetak</button></p>




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