<?php
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // Detik yang sudah berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("d-M-Y", time()+60*60*24*50);

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,12,6,2001));

    // strtotime
    echo date("l",strtotime("6 dec 2001"));

?>