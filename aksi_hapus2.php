<?php
//koneksi php
include 'koneksi2.php';

// mengambil data id yang di kirimkan oleh URL
$id     = $_GET['id'];

// menghapus data dari database
mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota='$id'");
 
//mengalihkan ke halaman tujuan ( index.php )
header("location:index2.php");
 
?>