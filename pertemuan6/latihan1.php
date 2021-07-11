<?php 
    // array
    // membuat array 
    $bulan = ["Januari", "Februari", "Maret"];

    // menampilkan array 
    // versi debugging 
    // var_dump($bulan);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: salmon;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: all 0.5s ease;
        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
    <title>Latihan Array</title>
</head>
<body>
    <?php $angka = [[1,2,3],[4,5,6],[7,8,9]]; ?>
    <?php foreach($angka as $num) : ?>
        <?php foreach($num as $a) : ?>
            <div class="kotak"><?= $a ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>