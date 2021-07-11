<?php 
    // cek apakah tidak ada data di $_GET 
    if( !isset($_GET["nama"]) ||
        !isset($_GET["nrp"]) ||
        !isset($_GET["jurusan"]) ||
        !isset($_GET["email"]) ){
        
        // Mengembalikan pengguna ke halaman awal 
        header("Location: latihan1.php");
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>Nama : <?= $_GET["nama"] ;?></li>
        <li>Nrp : <?= $_GET["nrp"] ; ?></li>
        <li>Jurusan : <?= $_GET["jurusan"] ; ?></li>
        <li>Email : <?= $_GET["email"] ; ?></li>
    </ul>
    <a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>