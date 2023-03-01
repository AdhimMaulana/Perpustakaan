<html lang="en">
<head>
    <title>Edit Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="buss4.css">
</head>
<body>
    <a href="index4.php">Kembali</a>
    <img src="logo smk.png" alt="Logo" class="center">
    <h2><font color='black'>INPUT DATA PEMINJAMAN</h2>
    <h2>APLIKASI PERPUSTAKAAN SMKN2 BANJARMASIN</h2></font>
    <div class="wrap">
        <div class="container">
            <h2>Edit Peminjaman</h2>
            <table>

                <?php
                    //koneksi database
                    include 'koneksi4.php';

                    //mengambil url variabel id
                    $id= $_GET['id'];

                    //query data table anggota
                    $data = mysqli_query($conn, "SELECT * FROM peminjaman WHERE id_peminjaman='$id'");

                    //pengulangan data menggunakan while
                    while($row = mysqli_fetch_assoc($data)) {

                    //nama variable untuk penyesuaian kolom database
                    $id_peminjaman      = $row['id_peminjaman'];
                    $tanggal_pinjam     = $row['tanggal_pinjam'];
                    $tanggal_kembali    = $row['tanggal_kembali'];
                    $id_buku            = $row['id_buku'];
                    $id_petugas         = $row['id_petugas'];
                    $id_anggota         = $row['id_anggota'];

                ?>
                <form action="aksi_edit4.php" method="POST">
                    <tr>
                        <td>ID Peminjaman</td>
                        <td> : </td>
                        <td><input type="text" name="id_peminjaman" placeholder="masukkan ID" value="<?php echo $id_peminjaman; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Pinjam</td>
                        <td> : </td>
                        <td><input type="date" name="tanggal_pinjam" placeholder="masukkan tanggal" value="<?php echo $row['tanggal_pinjam']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Kembali</td>
                        <td> : </td>
                        <td><input type="date" name="tanggal_kembali" placeholder="masukkan tanggal" value="<?php echo $row['tanggal_kembali']; ?>"></td>
                    </tr>
                    <tr>
                        <td>ID Buku</td>
                        <td> : </td>
                        <td><input type="text" name="id_buku" placeholder="masukkan ID buku" value="<?php echo $row['id_buku']; ?>"></td>
                    </tr>
                    <tr>
                        <td>ID Petugas</td>
                        <td> : </td>
                        <td><input type="text" name="id_petugas" placeholder="masukkan ID petugas" value="<?php echo $row['id_petugas']; ?>"></td>
                    </tr>
                    <tr>
                        <td>ID Anggota</td>
                        <td> : </td>
                        <td><input type="text" name="id_anggota" placeholder="masukkan ID anggota" value="<?php echo $row['id_anggota']; ?>"></td>
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
        <div class="footer">
        <p>Email : surel@smkn2-bjm.sch.id</p>
        <p>Telephone : 05113304677</p>
        <p>Instagram : @smkn2bjm</p>
        </div>
</body>
</html>