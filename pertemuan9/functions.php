<?php 
    // Koneksi ke database
    // mysqli_connect(namahost, username, password, namaadatabase) 
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // Bikin fungsi query sendiri
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        // buat nyimpen per-row
        $rows = []; 
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
?>