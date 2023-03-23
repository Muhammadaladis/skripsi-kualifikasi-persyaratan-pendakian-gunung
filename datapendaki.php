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

    <title>halaman data pendaki</title>
</head>
    <link rel="icon" href="logoxampp.png">
<body>
    <center><h1> Daftar Pendaki </h1></center>
    <center><a href="admin.php"> Kembali Kehalaman Admin </a></center>
    <br>
    <br>
    <center><a href="tambah.php"> Tambah data Pendaki </a></center>
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
            <td>Nomer Id Pendakian</td>
            <td>aksi</td>
            <td>Nama Lengkap</td>
            <td>Nomer Handphone</td>
            <td>Email.</td>
            <td>Foto KTP</td>
            <td>Naik Melalui Jalur</td>
            <td>Turun Melalui Jalur</td>
            <td>Tanggal Keberangkatan</td>
            <td>Tanggal Turun Pendakian</td>
        </tr>

        <?php $i =1; ?>
        <?php foreach( $pendakian as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('data ini akan di hapus apakah anda yakin?');">hapus</a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nohp"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><img src="img/<?=$row["ktp"];?>"
            width="100"></td>
            <td><?= $row["naik"]; ?></td>
            <td><?= $row["turun"]; ?></td>
            <td><?= $row["berangkatnaik"]; ?></td>
            <td><?= $row["berangkatturun"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
</table>
</div>

<script src="js/script.js"></script>
</body>
</html>
