<?php 
    // Hubungkan dengan file yang diperlukan dari file lain
    require "functions.php";

    // ambil data dari tabel mahasiswa (query)
    $mahasiswa = query("SELECT * FROM mahasiswa");
    // var_dump($conn);
    // var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <h2><a href="tambah.php">Tambah data mahasiswa</a></h2>
    <br>

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
                    <a href="">Edit</a> | 
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