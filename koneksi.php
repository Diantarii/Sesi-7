<?php
    include("konfigurasi.php");

    // echo "Host:".DBNAME;

    $cnn=mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Koneksi Ke DBMS GAGAL!");
    