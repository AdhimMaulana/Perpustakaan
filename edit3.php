<html lang="en">
<head>
    <title>Edit Buku</title>
    <link rel="stylesheet" type="text/css" href="buss1.css">
</head>
<body>
    <a href="index3.php">Kembali</a>
    <img src="logo smk.png" alt="Logo" class="center">
    <h2><font color='black'>INPUT DATA BUKU</h2>
    <h2>APLIKASI PERPUSTAKAAN SMKN2 BANJARMASIN</h2></font>
    <div class="wrap">
        <div class="container">
            <h2>Edit Buku</h2>
            <table>

                <?php
                    //koneksi database
                    include 'koneksi3.php';

                    //mengambil url variabel id
                    $id= $_GET['id'];

                    //query data table anggota
                    $data = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$id'");

                    //pengulangan data menggunakan while
                    while($row = mysqli_fetch_assoc($data)) {

                    //nama variable untuk penyesuaian kolom database
                    $id_buku            = $row['id_buku'];
                    $judul_buku         = $row['judul_buku'];
                    $penulis_buku       = $row['penulis_buku'];
                    $penerbit_buku      = $row['penerbit_buku'];
                    $tahun_penerbit_buku= $row['tahun_penerbit_buku'];
                    $stok_buku          = $row['stok_buku'];

                ?>
                <form action="aksi_edit3.php" method="POST">
                    <tr>
                        <td>ID Buku</td>
                        <td> : </td>
                        <td><input type="text" name="id_buku" placeholder="masukkan ID" value="<?php echo $id_buku; ?>"></td>
                    </tr>
                    <tr>
                        <td>Judul Buku</td>
                        <td> : </td>
                        <td><input type="text" name="judul_buku" placeholder="masukkan judul" value="<?php echo $row['judul_buku']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Penulis Buku</td>
                        <td> : </td>
                        <td><input type="text" name="penulis_buku" placeholder="masukkan nama penulis" value="<?php echo $row['penulis_buku']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Penerbit Buku</td>
                        <td> : </td>
                        <td><input type="text" name="penerbit_buku" placeholder="masukkan nama penerbit" value="<?php echo $row['penerbit_buku']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tahun Penerbit</td>
                        <td> : </td>
                        <td><input type="text" name="tahun_penerbit_buku" placeholder="masukkan tahun penerbit" value="<?php echo $row['tahun_penerbit_buku']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Stok Buku</td>
                        <td> : </td>
                        <td><input type="text" name="stok_buku" placeholder="masukkan jumlah stok" value="<?php echo $row['stok_buku']; ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="simpan">Simpan</button>  
                        </td>
                    </tr>
                </form>
                <?php } ?>
            </table>
          </div>
    </div>
        <br color="black">
        <div class="footer">
        <p>Email : surel@smkn2-bjm.sch.id</p>
        <p>Telephone : 05113304677</p>
        <p>Instagram : @smkn2bjm</p>
        </div>
</body>
</html>