<?php
session_start();
if( !isset($_SESSION['log']) ){
	header('location:login.php');
	exit;
}
?>

<?php
require 'functions.php';
$kesehatan = query("SELECT * FROM kesehatan");

// tombol cari ditekan
if( isset($_POST["cari"]) ){
    $kesehatan = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>halaman admin</title>
</head>
    <link rel="icon" href="logoxampp.png">
<body>
    <center><h1> Daftar data Sehat Pendaki Pendaki </h1></center>
    <center><a href="admin.php"> Kembali Kehalaman Admin </a></center>
    <br>
    <center><a href="tambah.php"> Tambah data Pendaki </a></center>
    <br>
    <center><a href="kesehatan.php"> Tambah Data Sehat Pendaki </a></center>
    <br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus 
    placeholder="Masukan Keyword Pencarian" autocomplete="off" id 
    ="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

</form>

<br>
<div id="container">
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <td>Nama Lengkap Pendaki</td>
            <td>Penyakit Jantung</td>
            <td>Penyakit Ginjal</td>
            <td>Penyakit Asma</td>
            <td>Penyakit Hipertensi</td>
            <td>Penyakit Epilepsi</td>
            <td>Penyakit Maag Kronis</td>
            <td>Penyakit Ambeien</td>
            <td>Penyakit Asam Urat</td>
            <td>Adapen</td>
            <td>Surat Sehat</td>
        </tr>

        <?php foreach( $kesehatan as $row ) : ?>
        <tr>
            <td><?= $row["namalk"]; ?></td>
            <td><?= $row["pjantung"]; ?></td>
            <td><?= $row["pginjal"]; ?></td>
            <td><?= $row["pasma"]; ?></td>
            <td><?= $row["phipertensi"]; ?></td>
            <td><?= $row["pepilepsi"]; ?></td>
            <td><?= $row["pmagkronis"]; ?></td>
            <td><?= $row["pambeien"]; ?></td>
            <td><?= $row["pasamurat"]; ?></td>
            <td><?= $row["padapen"]; ?></td>
            <td><img src="img/<?=$row["ssehat"];?>"
            width="100"></td>
        </tr>
        <?php endforeach; ?>
</table>
</div>

<script src="js/script.js"></script>
</body>
</html>
