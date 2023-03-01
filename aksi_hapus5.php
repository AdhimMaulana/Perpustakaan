<?php
//koneksi php
include 'koneksi5.php';

// mengambil data id yang di kirimkan oleh URL
$id     = $_GET['id'];

// menghapus data dari database
mysqli_query($conn, "DELETE FROM pengembalian WHERE id_pengembalian='$id'");
 
//mengalihkan ke halaman tujuan ( index.php )
header("location:index5.php");
 
?>