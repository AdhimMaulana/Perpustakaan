<html>
<head>
    <title>Daftar Buku</title>
    <link rel="stylesheet" type="text/css" href="basss1.css">
</head>
<body>
    <img src="logo smk.png" alt="Logo" class="center">
    <h2><font color='black'>INPUT DATA BUKU</h2>
    <h2>APLIKASI PERPUSTAKAAN SMKN2 BANJARMASIN</h2></font>
    <h3>List Buku</h3>
    <a href="index1.html">Halaman Utama</a>
    <a href=""></a>
    <div class="wrap">
    <form action="index3.php" method="get">
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
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penulis Buku</th>
            <th>Penerbit Buku</th>
            <th>Tahun Penerbit</th>
            <th>Stok Buku</th>
        </tr>
        <?php
            //panggil koneksi
        include 'koneksi3.php';

        $query_mysql    =   mysqli_query($conn, "SELECT * FROM buku") 
                            or die (mysqli_error()); 
        $nomor          = 1;
        while($data = mysqli_fetch_assoc($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_buku'] ?></td>
            <td><?php echo $data['judul_buku'] ?></td>
            <td><?php echo $data['penulis_buku'] ?></td>
            <td><?php echo $data['penerbit_buku'] ?></td>
            <td><?php echo $data['tahun_penerbit_buku'] ?></td>
            <td><?php echo $data['stok_buku'] ?></td>
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