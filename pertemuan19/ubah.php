<?php  
    //start session
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
    }
    
    //ambil data dari file lain
    require "functions.php";

    //ambil data dari url
    $id = $_GET["id"];

    //query data mahasiswa berdasarkan id nya
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
    // var_dump($mhs[0]["nrp"]);
    // var_dump($mhs);

    // cek apakah sudah pernah tekan tombol submit 
    if(isset($_POST["submit"])){
        global $id;
        
        //cek apakah data berhasil diubah
        if(update($_POST, $id) > 0){
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal diubah!');
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
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <h1>Form Mahasiswa</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" required
                value="<?= $mhs["nrp"] ;?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"
                value="<?= $mhs["nama"] ;?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email"
                value="<?= $mhs["email"] ;?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan"
                value="<?= $mhs["jurusan"] ;?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $mhs["gambar"]; ?>"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah!</button>
            </li>
        </ul>
    </form>
</body>
</html>