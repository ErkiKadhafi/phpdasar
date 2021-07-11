<?php
    // array 
    // variabel yang dapat menampung banyak nilai
    // tipe data array boleh beragam  

    // membuat aray
    $hari = ["Senin", "Selasa", "Rabu"];
    $campur = [12, "Senin", true];

    //menampilkan array
    var_dump ($hari);
    echo "<br>";
    print_r ($hari);
    echo "<br>";
    echo $campur[0];
    echo "<br>";
    
    // menambahkan array
    $hari[] = "Kamis";
    $hari[] = "Jum'at";
    var_dump ($hari);
?>