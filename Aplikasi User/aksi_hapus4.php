<?php
//koneksi php
include 'koneksi4.php';

// mengambil data id yang di kirimkan oleh URL
$id     = $_GET['id'];

// menghapus data dari database
mysqli_query($conn, "DELETE FROM peminjaman WHERE id_peminjaman='$id'");
 
//mengalihkan ke halaman tujuan ( index.php )
header("location:index4.php");
 
?>