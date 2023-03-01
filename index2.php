<html>
<head>
    <title>Daftar Anggota</title>
    <link rel="stylesheet" type="text/css" href="bass.css">
</head>
<body>
    <img src="logo smk.png" alt="Logo" class="center">
    <h2><font color='black'>Input Data Anggota</h2>
    <h2>Aplikasi Perpustakaan SMKN2 Banjarmasin</h2></font>
    <h3>List Anggota</h3>
    <a href="index1.html">Halaman Utama</a>
    <a href="tambah2.php">Tambah Anggota</a>
    <div class="wrap">
    <form action="index2.php" method="get">
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
            <th>ID Anggota</th>
            <th>Nama Anggota</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No Telephone</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
            //panggil koneksi
        include 'koneksi2.php';

        $query_mysql    =   mysqli_query($conn, "SELECT * FROM anggota") 
                            or die (mysqli_error());
        $nomor          = 1;
        while($data = mysqli_fetch_assoc($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_anggota'] ?></td>
            <td><?php echo $data['nama_anggota'] ?></td>
            <td><?php echo $data['jk_anggota'] ?></td>
            <td><?php echo $data['kelas_anggota'] ?></td>
            <td><?php echo $data['jurusan_anggota'] ?></td>
            <td><?php echo $data['no_telp_anggota'] ?></td>
            <td><?php echo $data['alamat_anggota'] ?></td>
            <td> 
        
                <a href="edit2.php?id=<?php echo $data['id_anggota']; ?>">Edit</a> | 
                <a href="aksi_hapus2.php?id=<?php echo $data['id_anggota'];?>" onclick="return confirm('Apakah yakin?')">Hapus</a> 
            </td>
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