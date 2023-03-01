<?php 
    //koneksi database
    include 'koneksi3.php';

    //variable untuk input POST
    $id_buku            = $_POST['id_buku'];
    $judul_buku         = $_POST['judul_buku'];
    $penulis_buku       = $_POST['penulis_buku'];
    $penerbit_buku      = $_POST['penerbit_buku'];
    $tahun_penerbit_buku= $_POST['tahun_penerbit_buku'];
    $stok_buku          = $_POST['stok_buku'];

    //query tambah data ke dalam table tbl_karyawan
    mysqli_query($conn, "INSERT INTO buku
                         VALUES ('$id_buku',
                                '$judul_buku',
                                '$penulis_buku',
                                '$penerbit_buku',
                                '$tahun_penerbit_buku',
                                '$stok_buku')");

    //pindah halaman index.php setelah eksekusi coding diatasnya
header("location:index3.php");

?>