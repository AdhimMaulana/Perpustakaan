<?php 
    //koneksi database
    include 'koneksi5.php';

    //variable untuk input POST
    $id_peminjaman          = $_POST['id_pengembalian'];
    $tanggal_pengembalian   = $_POST['tanggal_pengembalian'];
    $denda                  = $_POST['denda'];
    $id_buku                = $_POST['id_buku'];
    $id_petugas             = $_POST['id_petugas'];
    $id_anggota             = $_POST['id_anggota'];

    //query tambah data ke dalam table tbl_karyawan
    mysqli_query($conn, "INSERT INTO pengembalian
                         VALUES ('$id_pengembalian',
                                '$tanggal_pengembalian',
                                '$denda',
                                '$id_buku',
                                '$id_petugas',
                                '$id_anggota')");

    //pindah halaman index.php setelah eksekusi coding diatasnya
header("location:index5.php");

?>