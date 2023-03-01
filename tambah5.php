<html lang="en">
<head>
    <title>Tambah Pengembalian</title>
    <link rel="stylesheet" type="text/css" href="buss6.css">
</head>
<body>
    <a href="index5.php">Kembali</a>
    <img src="logo smk.png" alt="Logo" class="center">
    <h2><font color='black'>INPUT DATA PENGEMBALIAN</h2>
    <h2>APLIKASI PERPUSTAKAAN SMKN2 BANJARMASIN</h2></font>
    <div class="wrap">
        <div class="container">
            <h2>Tambah Pengembalian</h2>
            <table>
                <form action="aksi_tambah5.php" method="POST">
                    <tr>
                        <td>Tanggal Pengembalian</td>
                        <td> : </td>
                        <td><input type="date" name="tanggal_pengembalian" placeholder="masukkan tanggal"></td>
                    </tr>
                    <tr>
                        <td>Denda</td>
                        <td> : </td>
                        <td><input type="text" name="denda" placeholder="masukkan jumlah denda"></td>
                    </tr>
                    <tr>
                        <td>ID Buku</td>
                        <td> : </td>
                        <td><input type="text" name="id_buku" placeholder="masukkan ID buku"></td>
                    </tr>
                    <tr>
                        <td>ID Petugas</td>
                        <td> : </td>
                        <td><input type="text" name="id_petugas" placeholder="masukkan ID petugas"></td>
                    </tr>
                    <tr>
                        <td>ID Anggota</td>
                        <td> : </td>
                        <td><input type="text" name="id_anggota" placeholder="masukkan ID anggota"></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="simpan">Simpan</button>  
                        </td>
                    </tr>
                </form>
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