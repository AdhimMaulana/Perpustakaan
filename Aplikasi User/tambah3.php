<html lang="en">
<head>
    <title>Halaman Buku</title>
    <link rel="stylesheet" type="text/css" href="buss1.css">
</head>
<body>
    <a href="index3.php">Kembali</a>
    <img src="logo smk.png" alt="Logo" class="center">
    <h2><font color='black'>INPUT DATA BUKU</h2>
    <h2>Aplikasi Perpustakaan Smkn 2 Banjarmasin</h2></font>
    <div class="wrap">
        <div class="container">
            <h2>Tambah Buku</h2>
            <table>
                <form action="aksi_tambah3.php" method="POST">
                    <tr>
                        <td>Judul Buku</td>
                        <td> : </td>
                        <td><input type="text" name="judul_buku" placeholder="masukkan judul"></td>
                    </tr>
                    <tr>
                        <td>Penulis Buku</td>
                        <td> : </td>
                        <td><input type="text" name="penulis_buku" placeholder="masukkan nama penulis"></td>
                    </tr>
                    <tr>
                        <td>Penerbit Buku</td>
                        <td> : </td>
                        <td><input type="text" name="penerbit_buku" placeholder="masukkan nama penerbit"></td>
                    </tr>
                    <tr>
                        <td>Tahun Penerbit</td>
                        <td> : </td>
                        <td><input type="text" name="tahun_penerbit_buku" placeholder="masukkan tahun penerbit"></td>
                    </tr>
                    <tr>
                        <td>Stok Buku</td>
                        <td> : </td>
                        <td><input type="text" name="stok_buku" placeholder="masukkan jumlah stok"></td>
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