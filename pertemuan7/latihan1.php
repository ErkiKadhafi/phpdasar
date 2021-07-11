<?php 
    // variable scope 
    // "global" untuk cari variable di scope global 
    // $x = 10;
    // function show(){
    //     global $x;
    //     echo $x;
    // }
    // show();

    // variable superglobal (semua adalah array assosiative) 
    // $_GET (YANG DIBAHAS)
    // $_POST (YANG DIBAHAS)
    // $_REQUEST
    // $_SESSION (YANG DIBAHAS)
    // $_COOOKIE (YANG DIBAHAS)
    // $_SERVER
    // $_ENV
    // var_dump($_SERVER);
    // echo $_SERVER["SERVER_NAME"];
    
    // $_GET["nama"] = "Michael Alexander";
    // $_GET["nrp"] = "05111940000050";
    // var_dump($_GET);

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?
                    nama=<?= $mhs["nama"];?>&
                    nrp=<?= $mhs["nrp"];?>&
                    email=<?= $mhs["email"];?>&
                    jurusan=<?= $mhs["jurusan"];?>&
                    ">
                <?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>  