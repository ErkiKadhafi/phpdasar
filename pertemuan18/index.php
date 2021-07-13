<?php 
    //start session
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
    }
    
    // Hubungkan dengan file yang diperlukan dari file lain
    require "functions.php";

    //pagination
    $jmlDataPerHlm = 3;
    $jmlData = count(query("SELECT * FROM mahasiswa"));
    $jmlHlm = ceil($jmlData/$jmlDataPerHlm);
    if(isset($_GET["halaman"])){
        $halAktif = $_GET["halaman"];
    }else{
        $halAktif = 1;
    }
    $awalHlm = ($jmlDataPerHlm * $halAktif) - $jmlDataPerHlm;

    // ambil data dari tabel mahasiswa (query)
    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalHlm,$jmlDataPerHlm");

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
        .page{
            margin: 0 0 1rem 0;
        }
        .page a{
            font-size: 1.3rem;
        }
        .page-active{
            color: red;
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
            placeholder="Enter keyword . . ." autocomplete="off">
        <button type="submit" name="submit">Cari</button>
    </form>
    <br>

    <div class="page">
        <?php if($halAktif > 1) :?>
            <a href="?halaman=<?= $halAktif - 1 ;?>">&laquo</a>
        <?php endif; ?>

        <?php for($i=1;$i<=$jmlHlm;$i++) : ?>
            <?php if($i == $halAktif) : ?>
                <a href="?halaman=<?= $i ;?>" class="page-active"><?= $i; ?></a>
            <?php else :?>
                <a href="?halaman=<?= $i ;?>"><?= $i; ?></a>
            <?php endif; ?>  
        <?php endfor; ?>

        <?php if($halAktif < $jmlHlm) :?>
            <a href="?halaman=<?= $halAktif + 1 ;?>">&raquo</a>
        <?php endif; ?>
    </div>

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
                <td><?= $count + $awalHlm; ?></td>
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
</body>
</html>