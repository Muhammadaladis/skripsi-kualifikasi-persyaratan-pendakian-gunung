<?php
require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM pendakian
             WHERE
            nama LIKE '%$keyword%' OR
            nowa LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            turun LIKE '%$keyword%' OR
            naik LIKE '%$keyword%' OR
            berangkatnaik LIKE '%$keyword%' OR
            berangkatturun LIKE '%$keyword%' 
            ";
$pendakian = query($query);

?>
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
    <td>Tanggal Turun</td>
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