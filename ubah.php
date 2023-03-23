<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id

$pendaki = query("SELECT * FROM pendakian WHERE id = $id")[0];


// cek apakah tombol submit apakah sudah di tekan apa belum
if( isset($_POST["submit"]) ){

	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ){
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href ='datapendaki.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href ='datapendaki.php';
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
	<title></title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $pendaki["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $pendaki["ktp"]; ?>">
		<section>
	<div class="container">
		<div id="header">
		<img src="logoxampp.png" width="50" height="50"> 
            <h1>UBAH DATA PENDAKI </h1> 
			<h1>Form Pendaftaran Pendakian Gunung Gede Pangrango</h1>
			<p>Silakan Isi Formulir Secara Lengkap</p>
		</div>
		<div class="form-container">
			<form action="action.php" method="post" autocomplete="off" id="form1">
			<fieldset>
				<div class="form-grup">
					<div class="label">
						<label>Nama Lengkap</label>
					</div>
					<div class="input">
						<input type="text" name="nama" required value="<?= $pendaki["nama"]; ?>" placeholder="Isikan Nama Lengkap Anda"maxlength="30"autofocus>
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label>Nomer Handphone / WhatsApp</label>
					</div>
					<div class="input">
						<input type="text" name="nohp" required value="<?= $pendaki["nohp"]; ?>"placeholder="Isikan dengan angka"maxlength="30"autofocus>
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label>Email</label>
					</div>
					<div class="input">
						<input type="Email" name="email" required value="<?= $pendaki["email"]; ?>"placeholder="mis. email@gmail.com" autocomplete="off">
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label> Foto KTP </label>
					</div>
					<div class="input">
						<label for="file-upload" class="upload-foto">Upload Foto</label>
						<img src="img/<?= $pendaki['ktp']; ?>" width="50">  <br>
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
						<select name="naik" value="<?= $pendaki["naik"]; ?>">
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
						<select name="turun" value="<?= $pendaki["turun"]; ?>">
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
						<input type="date" name="berangkatnaik" required value="<?= $pendaki["berangkatnaik"]; ?>">
					</div>
				</div>
				<div class="form-grup">
					<div class="label">
						<label> Tanggal Kembali Turun </label>
					</div>
					<div class="input">
						<input type="date" name="berangkatturun" required value="<?= $pendaki["berangkatturun"]; ?>">
					</div>
				</div>
			</fieldset>

			<div class="form-grup">
			<button type="submit" name="submit"><img src="ceklis.jpg" width="20" height="20">Ubah Data</button>
		</div>
		<button type="kembali"><a href="admin.php">Kembali</button>
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