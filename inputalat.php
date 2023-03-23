<?php
require 'functions.php';
    $admin = query("SELECT * FROM penyewaan");

    if (isset($_POST["submit"])) {
        
        if (tambahproduk($_POST) > 0 ) {
            echo "<script> 
            alert('produk Baru Berhasil Ditambahkan!');
            document.location.href = 'inputalat.php';
            </script>";
        }else {
            echo mysqli_error($conn);
        }
    }

    if (isset($_GET["id"])) {
        $idupdate = $_GET["id"];
        $update = query("SELECT * FROM penyewaan WHERE id_penyewaan ='$idupdate'")[0];
    }

    if (isset($_POST["update"])) {
        
        if (ubahalat($_POST) > 0 ) {
            echo "<script> 
            alert('produk Baru Berhasil DiPerbarui!');
            document.location.href = 'inputalat.php';
            </script>";
        }else {
            echo mysqli_error($koneksi);
        }
    }
    
   
    

    

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>GUNUNG GEDE PANGRANGO</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
        <link rel="stylesheet" type="text/css" href="sidebar.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	    <link rel="icon" href="logoxampp.png">
        <script src="https://kit.fontawesome.com/ff8b67bae7.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>

        <!-- Navigasi panel -->
        <nav class="navbar navbar-expand-lg bg-black mx-auto fixed-top">
            <div class="container-fluid">
                <p class="h1">
                    <a class="navbar-brand text-white" href="dashboard-admin.php" style="font-size:35px; margin-left: 100px;">Consina Style</a>
                </p>             
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <a href="datapenyewaan.php" onclick="return confirm('Apakah Anda Yakin Untuk Keluar?!')">
                        <span style="margin-left:500px; font-size:30px;"><i class="fa-solid fa-right-from-bracket text-white"></i></span>
                    </a>
                </div>
            </div>
        </nav>
        <!-- akhir navigasi panel -->


        <div class="container-sm">
            <div class="row">
                <div class="col">
                    <!-- sidebar -->
                    <div class="sidebar">
                        <ul>
                            <li><a href="dashboard-admin.php"><i class="fa-solid fa-house-chimney"></i>Dashboard</a></li>
                            <li><a href="dashboard-admin-profil.php"><i class="fa-solid fa-circle-user"></i>Profil</a></li>
                            <li><a href="dashboard-admin-konten.php"><i class="fa-solid fa-newspaper"></i>Kelola Konten</a></li>
                        </ul>
                    </div>
                    <!-- akhir sidebar -->
                </div>
                <div class="col" id="kol-dashboard">
                    <div class="row" id="header-dashboard">
                        <div class="col-6 col-sm-6">
                            <span> 
                                <h2><i class="fa-solid fa-shop"></i>INPUT PRODUK</h2>
                            </span>
                        </div>
                        <div class="col-6 col-sm-6">
                            <a href="dashboard-admin-toko.php" type="button" class="btn btn-outline-success">Kembali</a>
                        </div>
                        <hr style="width:900px; margin-bottom:100px;">
                    </div>
                    <div class="row mb-5">
                        <div class="col-8 col-sm-6">
                            <form action="" method="post" enctype="multipart/form-data">

                           
                            <input type="text" name="idupdate" class="form-info" value="<?php if (isset($update)) { echo $idupdate;}?>" >

                                <div class="kotak-isian">
                                    <input type="text" name="nama_alat" class="form-info" value="<?php if (isset($update)) { echo $update["nama_alat"];}?>">
                                    <label for="" class="label-form-info">Nama Alat</label>
                                </div>
                                <div class="kotak-isian">
                                    <input type="text" name="dekspripsi_alat" class="form-info" value="<?php if (isset($update)) { echo $update["dekspripsi_alat"];}?>">
                                    <label for="" class="label-form-info">Deksripsi Alat</label>
                                </div>
                                <div class="kotak-isian">
                                    <input type="text" name="stok_alat" class="form-info" value="<?php if (isset($update)) { echo $update["stok_alat"];}?>">
                                    <label for="" class="label-form-info">Stok Alat</label>
                                </div>
                                <div class="kotak-isian">
                                    <input type="text" name="hargasewa_alat" class="form-info" value="<?php if (isset($update)) {echo $update["hargasewa_alat"];}?>">
                                    <label for="" class="label-form-info">Harga Sewa Alat</label>
                                </div>
                                <div class="kotak-isian">
                                    <input type="file" name="ktp" class="form-info" value="<?php if (isset($update)) {echo $update["foto_alat"];}?>">
                                    <label for="" class="label-form-info">Foto Alat</label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-outline-primary" type="submit" name="submit">Simpan</button>
                                    <button class="btn btn-outline-success" type="submit" name="update">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-5"></div>
                        <div class="col-12 col-sm-12">

                            <div class="card">
                                <h5 class="card-header"> Produk</h5>
                                <div class="card-body shadow">
                                    <table class="table mb-5">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID Penyewaan</th>
                                                <th scope="col">Foto Alat</th>
                                                <th scope="col">Nama Alat</th>
                                                <th scope="col">Deksripsi Alat</th>
                                                <th scope="col">Stok Alat</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($admin as $row) : ?>
                                            <tr>
                                                <td><?=$row["id_penyewaan"];?></td>
                                                <td><img src="img/<?=$row["foto_alat"];?>" alt="" width="50"></td>
                                                <td><?=$row["nama_alat"];?></td>
                                                <td><?=$row["dekspripsi_alat"];?></td>
                                                <td><?=$row["stok_alat"];?></td>
                                                
                                               
                                                <td>
                                                    <a class="btn btn-success mb-2" href="inputalat.php?id=<?=$row["id_penyewaan"];?>" role="button">Update</a>

                                                    <a class="btn btn-danger mb-2" href="hapusalat.php?id=<?=$row["id_penyewaan"];?>" role="button" onclick="return confirm('Yakin Untuk Menghapus Data?!');">Hapus</a>

                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        

                        </div>
                    </div>
        
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="row bg-black" style="width:100%; padding-left:200px; position:absolute;">

            <p class="h1 mt-5 mb-5">
                <a class="navbar-brand text-success" href="dashboard-admin.php" style="font-size:50px; margin-left: -100px;">Consina Style</a>
            </p>
        </div>
        <!-- akhir footer -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>