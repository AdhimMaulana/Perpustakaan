<?php 
    //Koneksi database
    $hostname   = "localhost"; //menunjukkan bahwa server lokal
    $username   = "root"; //username server lokal standart
    $password   = ""; //mysql komputer lokal biasanya tidak ada password
    $database   = "perpustakaan"; // sebuah nama database

    //variable untuk menghubungkan database server
    $conn   = mysqli_connect(
                $hostname,
                $username,
                $password,
                $database);
?>