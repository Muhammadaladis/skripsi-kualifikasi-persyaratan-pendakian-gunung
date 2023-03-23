<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
	$nowa = htmlspecialchars($data["nohp"]);
	$email = htmlspecialchars( $data["email"]);
	$naik = htmlspecialchars($data["turun"]);
	$turun = htmlspecialchars($data["naik"]);
	$tglberangkat = htmlspecialchars($data["berangkatnaik"]);
	$tglturun = htmlspecialchars($data["berangkatturun"]);

    // upload gambar
    $fotoktp = upload();
    if( !$fotoktp ) {
        return false;
    }
    
	$query = "INSERT INTO pendakian
    VALUES
    ('', '$nama','$nowa', '$email', '$fotoktp', ' $naik', '
    $turun', '$tglberangkat', ' $tglturun')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function upload() {
    

    $namaFile = $_FILES['ktp']['name'];
    $ukuranFile = $_FILES['ktp']['size'];
    $error = $_FILES['ktp']['error'];
    $tmpName = $_FILES['ktp']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ){
        echo "<script>
                alert('Upload Yang Tertera Terlebih Dahulu!');
                </script>";
            return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'jfif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Yang anda upload bukan gambar!');
                </script>";
            return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('Ukuran Gambar Terlalu Besar!');
                </script>";
            return false;
    }

    // lolos pengecekan, gambar siap diupload
    // ganerate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    

    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

    return $namaFileBaru;

}

function kesehatan($data) {
    global $conn;

    $namalk = htmlspecialchars($data["namalk"]);
	$pjantung = htmlspecialchars($data["kesehatan_jantung"]);
	$pginjal = htmlspecialchars( $data["kesehatan_ginjal"]);
	$pasma = htmlspecialchars($data["kesehatan_asma"]);
	$phipertensi = htmlspecialchars($data["kesehatan_hipertensi"]);
	$pepilepsi = htmlspecialchars($data["kesehatan_epilepsi"]);
	$pmagkronis = htmlspecialchars($data["kesehatan_maag"]);
    $pambeien = htmlspecialchars($data["kesehatan_ambeien"]);
    $pasamurat = htmlspecialchars($data["kesehatan_asamurat"]);
    $padapen = htmlspecialchars($data["kesehatan_pen"]);
    $ssehat = htmlspecialchars($data["ktp"]);
    // upload gambar
    $ssehat = upload();
    if( !$ssehat ) {
        return false;
    }
    
	$query = "INSERT INTO kesehatan
    VALUES
    ('', '$namalk','$pjantung', '$pginjal', '$pasma', ' $phipertensi', '
    $pepilepsi', '$pmagkronis', ' $pambeien', '$pasamurat', '$padapen', '$ssehat')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pendakian WHERE id = $id");
    return mysqli_affected_rows($conn);

}

function hapusalat($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM penyewaan WHERE id_penyewaan = $id");
    return mysqli_affected_rows($conn);

}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
	$nowa = htmlspecialchars($data["nohp"]);
	$email = htmlspecialchars( $data["email"]);
	$turun = htmlspecialchars($data["turun"]);
	$naik = htmlspecialchars($data["naik"]);
	$berangkatnaik = htmlspecialchars($data["berangkatnaik"]);
	$berangkatturun = htmlspecialchars($data["berangkatturun"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    // cek apakah admin pilih gambar baru atau tidak

    if( $_FILES['ktp']['error'] === 4 ) {
        $ktp = $gambarLama;
    } else {
        $ktp = upload();
    }
	$query = "UPDATE pendakian SET
                nama = '$nama',
                nohp = '$nowa',
                email = '$email',
                ktp = '$ktp',
                turun = '$naik',
                naik = '$turun',
                berangkatnaik = '$berangkatnaik',
                berangkatturun = '$berangkatturun'
            WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function ubahalat($data){
    global $conn;

    $id = $data["idupdate"];
    $nama_alat = htmlspecialchars($data["nama_alat"]);
	$dekspripsi_alat = htmlspecialchars($data["dekspripsi_alat"]);
	$stok_alat = htmlspecialchars( $data["stok_alat"]);
	$hargasewa_alat = htmlspecialchars($data["hargasewa_alat"]);
	
    
    // cek apakah admin pilih gambar baru atau tidak

    
	$query = "UPDATE penyewaan SET nama_alat='$nama_alat',dekspripsi_alat='$dekspripsi_alat', stok_alat='$stok_alat',hargasewa_alat='$hargasewa_alat' WHERE id_penyewaan=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM pendakian
             WHERE
        nama LIKE '%$keyword%' OR
        nohp LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        turun LIKE '%$keyword%' OR
        naik LIKE '%$keyword%' OR
        berangkatnaik LIKE '%$keyword%' OR
        berangkatturun LIKE '%$keyword%' 
        ";
    return query($query);
}

function tambahproduk($data) {
    global $conn;

    $nama_alat = htmlspecialchars($data["nama_alat"]);
	$deksripsi_alat = htmlspecialchars($data["dekspripsi_alat"]);
	$stok_alat = htmlspecialchars( $data["stok_alat"]);
	$hargasewa_alat = htmlspecialchars($data["hargasewa_alat"]);
	

    // upload gambar
    $foto_alat = upload();
    if( !$foto_alat ) {
        return false;
    }
    
	$query = "INSERT INTO penyewaan
    VALUES
    ('', '$foto_alat','$nama_alat', '$deksripsi_alat', '$stok_alat', ' $hargasewa_alat')
    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}




?>