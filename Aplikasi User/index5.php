<html>
<head>
    <title>Daftar Pengembalian</title>
    <link rel="stylesheet" type="text/css" href="basss6.css">
</head>
<body>
    <img src="logo smk.png" alt="Logo" class="center">
    <h2><font color='black'>INPUT DATA PENGEMBALIAN</h2>
    <h2>APLIKASI PERPUSTAKAAN SMKN2 BANJARMASIN</h2></font>
    <h3>List Pengembalian</h3>
    <a href="index1.html">Halaman Utama</a>
    <a href="tambah5.php"></a>
     <div class="wrap">
    <form action="index5.php" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
    <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>ID Pengembalian</th>
            <th>Tanggal Pengembalian</th>
            <th>Denda</th>
            <th>ID Buku</th>
            <th>ID Petugas</th>
            <th>ID Anggota</th>
        </tr>
        <?php
            //panggil koneksi
        include 'koneksi5.php';

        $query_mysql    =   mysqli_query($conn, "SELECT * FROM pengembalian") 
                            or die (mysqli_error()); 
        $nomor          = 1;
        while($data = mysqli_fetch_assoc($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_pengembalian'] ?></td>
            <td><?php echo $data['tanggal_pengembalian'] ?></td>
            <td><?php echo $data['denda'] ?></td>
            <td><?php echo $data['id_buku'] ?></td>
            <td><?php echo $data['id_petugas'] ?></td>
            <td><?php echo $data['id_anggota'] ?></td>
        </tr>
        <?php } ?>
    </table>
    </div>
        <div class="footer">
        <p>Email : surel@smkn2-bjm.sch.id</p>
        <p>Telephone : 05113304677</p>
        <p>Instagram : @smkn2bjm</p>
    </div>
</body>
</html>