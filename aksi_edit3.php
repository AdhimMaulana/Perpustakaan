<?php 
    //koneksi database
    include 'koneksi3.php';

    //variable data yang dikirimkan oleh form
    $id_buku            = $_POST['id_buku'];
    $judul_buku         = $_POST['judul_buku'];
    $penulis_buku       = $_POST['penulis_buku'];
    $penerbit_buku      = $_POST['penerbit_buku'];
    $tahun_penerbit_buku= $_POST['tahun_penerbit_buku'];
    $stok_buku          = $_POST['stok_buku'];

    //query edit data ke dalam table (anggota)
    mysqli_query($conn, "UPDATE buku
                         SET id_buku ='$id_buku',
                                judul_buku ='$judul_buku',
                                penulis_buku ='$penulis_buku',
                                penerbit_buku ='$penerbit_buku',
                                tahun_penerbit_buku ='$tahun_penerbit_buku',
                                stok_buku ='$stok_buku'
                                WHERE id_buku = '$id_buku' ");

    //pindah halaman index.php setelah eksekusi coding diatasnya
header("location:index3.php");

?>