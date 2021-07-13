<?php
    //start session
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
    }

    //ambil data dari file lain
    require "functions.php";

    // cek apakah sudah pernah tekan tombol submit 
    if(isset($_POST["submit"])){
        // var_dump($_POST);
        // var_dump($_FILES);
        // die;

        //cek apakah data berhasil ditambahkan
        if(insert($_POST) > 0){
            // echo "Data berhasil ditambahkan";
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            // echo "Gagal!";
            // echo "<br>";
            // echo mysqli_error($conn);
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Form Mahasiswa</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah!</button>
            </li>
        </ul>
    </form>
</body>
</html>