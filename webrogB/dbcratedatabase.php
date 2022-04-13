<?php
/**
 * untuk membuat database
 * 1.koneksi ke DBMS mysql
 * 2.script sql untuk crate database
 * 3.execute script tersebut
 */
    include_once("dbkoneksi.php");
    if($cnn){
        $sql = "CREATE DATABASE mahasiswa;";

        $hsl = mysqli_query($cnn,$sql);
        if($hsl){
            echo "database mahasiswa <strong>sukses</strong> dibuat <br>";

        }else{
            echo "database mahasiswa <strong>gagal</strong> dibuat<br>";
        }
        mysqli_close($cnn);
    }