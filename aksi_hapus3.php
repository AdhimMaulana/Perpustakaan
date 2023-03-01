<?php
//koneksi php
include 'koneksi3.php';

// mengambil data id yang di kirimkan oleh URL
$id     = $_GET['id'];

// menghapus data dari database
mysqli_query($conn, "DELETE FROM buku WHERE id_buku='$id'");
 
//mengalihkan ke halaman tujuan ( index.php )
header("location:index3.php");
 
?>