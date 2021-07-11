<?php  
    $mahasiswa = [["Michael Alexander", "05111940000050", "Informatika", "erki.qaedhafi@gmail.com"],
                    ["Tipat Cantok", "05111940000113", "Informatika", "tipat.cantok@gmail.com"],
                    ["Frank Budi", "05111940000061", "Teknik Elektro", "frank.budi@gmail.com"]];
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
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) :?>
        <ul>
            <!-- <?php foreach($mhs as $data) :?>
                <li><?= $data ?></li>
            <?php endforeach; ?> -->

            <?php for($i=0;$i<count($mhs);$i++) : ?>
                <li><?= $mhs[$i] ?></li>
            <?php endfor; ?>
            
        </ul>
    <?php  endforeach;?>
</body>
</html>