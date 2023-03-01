<?php 
    //koneksi database
    include 'koneksi2.php';

    //variable data yang dikirimkan oleh form
    $id_anggota         = $_POST['id_anggota'];
    $nama_anggota       = $_POST['nama_anggota'];
    $jk_anggota         = $_POST['jk_anggota'];
    $kelas_anggota      = $_POST['kelas_anggota'];
    $jurusan_anggota    = $_POST['jurusan_anggota'];
    $no_telp_anggota    = $_POST['no_telp_anggota'];
    $alamat_anggota     = $_POST['alamat_anggota'];

    //query edit data ke dalam table (anggota)
    mysqli_query($conn, "UPDATE anggota
                         SET id_anggota ='$id_anggota',
                                nama_anggota ='$nama_anggota',
                                jk_anggota ='$jk_anggota',
                                kelas_anggota ='$kelas_anggota',
                                jurusan_anggota ='$jurusan_anggota',
                                no_telp_anggota ='$no_telp_anggota',
                                alamat_anggota ='$alamat_anggota'
                                WHERE id_anggota = '$id_anggota' ");

    //pindah halaman index.php setelah eksekusi coding diatasnya
header("location:index2.php");

?>