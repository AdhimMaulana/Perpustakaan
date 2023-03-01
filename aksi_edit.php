<?php 
    include 'koneksi.php';

    $kode_kerja           = $_POST['kode_kerja'];
    $nama_pekerja         = $_POST['nama_pekerja'];
    $jk_pekerja           = $_POST['jk_pekerja'];
    $keahlian_pekerja     = $_POST['keahlian_pekerja'];
    $no_telp_pekerja      = $_POST['no_telp_pekerja'];
    $alamat_pekerja       = $_POST['alamat_pekerja'];


    mysqli_query($conn, "UPDATE pekerja
                         SET kode_kerja ='$kode_kerja',
                                nama_pekerja ='$nama_pekerja',
                                jk_pekerja ='$jk_pekerja',
                                keahlian_pekerja ='$keahlian_pkerja',
                                no_telp_pekerja ='$no_telp_pekerja',
                                alamat_pekerja ='$alamat_pekerja'
                                WHERE kode_kerja = '$kode_kerja' ");

header("location:index.php");

?>