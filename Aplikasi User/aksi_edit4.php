<?php 
    //koneksi database
    include 'koneksi4.php';

    //variable data yang dikirimkan oleh form
    $id_peminjaman      = $_POST['id_peminjaman'];
    $tanggal_pinjam     = $_POST['tanggal_pinjam'];
    $tanggal_kembali    = $_POST['tanggal_kembali'];
    $id_buku            = $_POST['id_buku'];
    $id_petugas         = $_POST['id_petugas'];
    $id_anggota         = $_POST['id_anggota'];

    //query edit data ke dalam table (anggota)
    mysqli_query($conn, "UPDATE peminjaman
                         SET id_peminjaman ='$id_peminjaman',
                                tanggal_pinjam ='$tanggal_pinjam',
                                tanggal_kembali ='$tanggal_kembali',
                                id_buku ='$id_buku',
                                id_petugas ='$id_petugas',
                                id_anggota ='$id_anggota'
                                WHERE id_peminjaman = '$id_peminjaman' ");

    //pindah halaman index.php setelah eksekusi coding diatasnya
header("location:index4.php");

?>