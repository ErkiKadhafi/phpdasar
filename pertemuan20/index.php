<?php 
    //start session
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
    }
    
    // Hubungkan dengan file yang diperlukan dari file lain
    require "functions.php";

    // ambil data dari tabel mahasiswa (query)
    $mahasiswa = query("SELECT * FROM mahasiswa");
    // var_dump($conn);
    // var_dump($mahasiswa);

    //penguna mencari sesuatu
    if(isset($_POST["submit"])){
        $mahasiswa = search($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        /* .container{
            display: flex;
            justify-content: center;
            align-items: center;
        } */
        .loader{
            width: 50px;
            position: absolute;
            left: 320px;
            z-index: -1;
            top: 170px;
            display: none;
        }
    </style>
</head>
<body>
    <h3><a href="logout.php">Logout!</a></h3>

    <h1>Daftar Mahasiswa</h1>

    <h2><a href="tambah.php">Tambah data mahasiswa</a></h2>
    <br>

    <form action="" method="POST">
        <input type="text" name="keyword" autofocus size="40"
            placeholder="Enter keyword . . ." autocomplete="off"
            id="keyword">
        <button type="submit" name="submit" id="search-btn">Cari</button>

        <img src="img/loader.gif" class="loader">
    </form>
    <br>
    <div class="container">
        <table border="1" cellpadding="10" cellspacing=0>
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $count = 1 ?>
            <?php foreach($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $count; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">Edit</a> | 
                        <a href="hapus.php?id=<?= $row["id"]; ?>"
                            onclick="return confirm('Are u sure?');">Delete</a>
                    </td>
                    <td>
                        <img src="img/<?= $row["gambar"]; ?>" width="100">
                    </td>
                    <td><?= $row["nrp"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
                <?php $count++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>