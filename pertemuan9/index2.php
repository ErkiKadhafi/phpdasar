<?php 
    // Koneksi ke database
    // mysqli_connect(namahost, username, password, namaadatabase) 
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // ambil data dari tabel mahasiswa (query)
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // var_dump($result);
    if(!$result){
        echo mysqli_error($conn);
    }

    // ambil data (fetch) mahasiswa dari object result -> cuman return 1 row
    // mysqli_fetch_row() -> mengembalikan array numeric
    // mysqli_fetch_assoc() -> mengembalikan array associative
    // mysqli_fetch_array() -> mengembalikan array assoc and numeric (lama)
    // mysqli_fetch_object() -> mengembalikan array object

    // $mhs = mysqli_fetch_row($result);
    // $mhs = mysqli_fetch_array($result);
    // $mhs = mysqli_fetch_object($result);
    // while(  $mhs = mysqli_fetch_assoc($result) ){
    //     var_dump($mhs);
    // }
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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $count; ?></td>
                <td>
                    <a href="">Edit</a> | 
                    <a href="">Delete</a>
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
        <?php endwhile; ?>
    </table>
</body>
</html>