<?php
/**
 * * menambahkan data ke tabel mhs
 * 1. koneksi server database dan membuka database
 * 2.cscript sql create tabel
 * tabel:mhs
 * field: nim varchar(8),nama varchar(30),jurusan varchar(30),jkm enum,tgllahir date,pascode varchar(10)
 * 3.execure script point 2
 * 4.close connection
 */
    if(isset($_POST["txNIM"])){
    include_once("dbkoneksi2.php");

    $nim = $_POST["txNIM"];
    $nama = $_POST["txNAMA"];
    $talag = $_POST["txTALAG"];
    $jk = $_POST["txJK"];
    $jur = $_POST["txJUR"];
    $pass = $_POST["txPASSS"];

    $sqlINSERT = "INSERT INTO mhs(NIM, NAMA, JURUSAN, JK,TGLLAHIR, PASSCODE) VALUES 
    ('12345678', 'RUDI', 'MTI', 'L', '2001-04-13, 'asf'),
    ('12345678', 'Rendi', 'MTI', 'L', '2002-04-13, 'adf'),";

    $hsl = mysqli_query($cnn, $sqlINSERT);

    if($hsl){
        echo "insert data sukses<br>";
    }else{
        echo"insert data gagal<br>";
    }
    mysqli_close($cnn)
}