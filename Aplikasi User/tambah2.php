<html lang="en">
<head>
    <title>Halaman Anggota</title>
    <link rel="stylesheet" type="text/css" href="buss.css">
</head>
<body>
    <a href="index2.php">Kembali</a>
    <img src="logo smk.png" alt="Logo" class="center">
    <h2><font color='black'>Input Data Anggota</h2>
    <h2>Aplikasi Perpustakaan SMKN2 Banjarmasin</h2></font>
    <div class="wrap">
        <div class="container">
            <h2>Tambah Anggota</h2>
            <table>
                <form action="aksi_tambah2.php" method="POST">
                    <tr>
                        <td>Nama Anggota</td>
                        <td> : </td>
                        <td><input type="text" name="nama_anggota" placeholder="masukkan nama"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td> : </td>
                        <td>
                            <input type="radio" name="jk_anggota" value="L">Laki-Laki
                            <input type="radio" name="jk_anggota" value="P">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td> : </td>
                        <td><input type="text" name="kelas_anggota" placeholder="masukkan kelas"></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td> : </td>
                        <td>
                            <select name="jurusan_anggota">
                            <option value="RPL">Rekayasa Perangkat Lunak</option>
                            <option value="TKJ">Teknik Komputer dan Jaringan</option>
                            <option value="MM">Multimedia</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telephone</td>
                        <td> : </td>
                        <td><input type="text" name="no_telp_anggota" placeholder="masukkan No HP"></td>
                    </tr>
                    <tr>
                        <td>Alamat Anggota</td>
                        <td> : </td>
                        <td><input type="text" name="alamat_anggota" placeholder="masukkan alamat"></td>
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