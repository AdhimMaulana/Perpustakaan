<?php 
    //koneksi database
    include 'koneksi5.php';

    //variable data yang dikirimkan oleh form
    $id_pengembalian        = $_POST['id_pengembalian'];
    $tanggal_pengembalian   = $_POST['tanggal_pengembalian'];
    $denda                  = $_POST['denda'];
    $id_buku                = $_POST['id_buku'];
    $id_petugas             = $_POST['id_petugas'];
    $id_anggota             = $_POST['id_anggota'];

    //query edit data ke dalam table (anggota)
    mysqli_query($conn, "UPDATE pengembalian
                         SET id_pengembalian ='$id_pengembalian',
                                tanggal_pengembalian ='$tanggal_pengembalian',
                                denda ='$denda',
                                id_buku ='$id_buku',
                                id_petugas ='$id_petugas',
                                id_anggota ='$id_anggota'
                                WHERE id_pengembalian = '$id_pengembalian' ");

    //pindah halaman index.php setelah eksekusi coding diatasnya
header("location:index5.php");

?>