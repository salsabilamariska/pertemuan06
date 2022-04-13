<?php
/** 
 * membuat koneksi
 * 1.menyiapkan lokasi server user name dan password
 * 2. test koneksi
*/  
    include_once("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE,DBNAME,DBPORT) or die("koneksi ke DBMS mysql gagal<br>");
    echo "koneksi DBMS mysql sukses<br>";

