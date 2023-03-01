<?php 
    //koneksi database
    include 'koneksi4.php';

    //variable untuk input POST
    $id_peminjaman      = $_POST['id_peminjaman'];
    $tanggal_pinjam     = $_POST['tanggal_pinjam'];
    $tanggal_kembali    = $_POST['tanggal_kembali'];
    $id_buku            = $_POST['id_buku'];
    $id_petugas         = $_POST['id_petugas'];
    $id_anggota         = $_POST['id_anggota'];

    //query tambah data ke dalam table tbl_karyawan
    mysqli_query($conn, "INSERT INTO peminjaman
                         VALUES ('$id_peminjaman',
                                '$tanggal_pinjam',
                                '$tanggal_kembali',
                                '$id_buku',
                                '$id_petugas',
                                '$id_anggota')");

    //pindah halaman index.php setelah eksekusi coding diatasnya
header("location:index4.php");

?>