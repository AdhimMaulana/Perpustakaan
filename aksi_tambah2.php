<?php 
    //koneksi database
    include 'koneksi2.php';

    //variable untuk input POST
    $id_anggota         = $_POST['id_anggota'];
    $nama_anggota       = $_POST['nama_anggota'];
    $jk_anggota         = $_POST['jk_anggota'];
    $kelas_anggota      = $_POST['kelas_anggota'];
    $jurusan_anggota    = $_POST['jurusan_anggota'];
    $no_telp_anggota    = $_POST['no_telp_anggota'];
    $alamat_anggota     = $_POST['alamat_anggota'];

    //query tambah data ke dalam table tbl_karyawan
    mysqli_query($conn, "INSERT INTO anggota
                         VALUES ('$id_anggota',
                                '$nama_anggota',
                                '$jk_anggota',
                                '$kelas_anggota',
                                '$jurusan_anggota',
                                '$no_telp_anggota',
                                '$alamat_anggota')");

    //pindah halaman index.php setelah eksekusi coding diatasnya
header("location:index2.php");

?>