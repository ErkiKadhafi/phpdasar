<?php
    // Function 
    // 1. Built in function
        // date, time, strtotime  
    // 2. Utility function 
        // var_dump, is_set, empty, die, sleep
    // 3. User defined function 
    
    // Function date
    // echo date("l, d-M-Y");
    
    // Function time 
    // UNIX timestamp / EPOCH time 
    // detik yang telah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("l", time()+(60*60*24));

    // mktime 
    // membuat sendiri detik
    // mktime(0, 0, 0, 0, 0, 0);
    // jam, menit, detik, bulan, tanggal, tahun 
    // echo date("l", mktime(0,0,0, 6, 2, 2001));

    // strtotime 
    // echo date("l", strtotime("2 jun 2001"));
?>