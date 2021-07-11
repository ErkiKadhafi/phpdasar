<?php 
    // $mahasiswa = [["Michael Alexander", "05111940000050", "Informatika", "erki.qaedhafi@gmail.com"],
    // ["Tipat Cantok", "05111940000113", "Informatika", "tipat.cantok@gmail.com"]];


    // array asosiatif 
    // definisinya sama seperti array 
    // key nya adalah string yang kita buat sendiri 
    $mahasiswa = [
            [   
                "nama" => "Michael Alexander", 
                "nrp" => "05111940000050",
                "email" => "erki.qaedhafi@gmail.com",
                "jurusan" => "Teknik Informatika",
                "tugas" => [70, 85, 90],
                "gambar" => "img1.jpg"
            ],
            [
                "nama" => "Tipat Cantok", 
                "nrp" => "05111940000113",
                "email" => "tipat.cantok@gmail.com",
                "jurusan" => "Teknik Elektro",
                "tugas" => [90, 95, 80],
                "gambar" => "img2.jpg"
            ],
            [
                "nama" => "Frank Fruit", 
                "nrp" => "05111940000061",
                "email" => "frank.fruit@gmail.com",
                "jurusan" => "Teknik Sipil",
                "tugas" => [100, 90, 89],
                "gambar" => "img3.jpg"
            ]
    ];
    // echo $mahasiswa[1]["tugas"][0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <!-- <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <?php foreach($mhs as $m) : ?>
                <li><?= $m ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?> -->
    
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama:<?= $mhs["nama"] ?></li>
            <li>NRP:<?= $mhs["nrp"] ?></li>
            <li>Jurusan:<?= $mhs["jurusan"] ?></li>
            <li>Email:<?= $mhs["email"] ?></li>
            <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>