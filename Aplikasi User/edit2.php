<html lang="en">
<head>
    <title>Edit Anggota</title>
    <link rel="stylesheet" type="text/css" href="buss.css">
</head>
<body>
    <a href="index2.php">Kembali</a>
    <img src="logo smk.png" alt="Logo" class="center">
    <h2><font color='black'>Input Data Anggota</h2>
    <h2>Aplikasi Perpustakaan SMKN2 Banjarmasin</h2></font>
    <div class="wrap">
        <div class="container">
            <h2>Edit Anggota</h2>
            <table>

                <?php
                    //koneksi database
                    include 'koneksi2.php';

                    //mengambil url variabel id
                    $id= $_GET['id'];

                    //query data table anggota
                    $data = mysqli_query($conn, "SELECT * FROM anggota WHERE id_anggota='$id'");

                    //pengulangan data menggunakan while
                    while($row = mysqli_fetch_assoc($data)) {

                    //nama variable untuk penyesuaian kolom database
                    $id_anggota         = $row['id_anggota'];
                    $nama_anggota       = $row['nama_anggota'];
                    $jk_anggota         = $row['jk_anggota'];
                    $kelas_anggota      = $row['kelas_anggota'];
                    $jurusan_anggota    = $row['jurusan_anggota'];
                    $no_telp_anggota    = $row['no_telp_anggota'];
                    $alamat_anggota     = $row['alamat_anggota'];

                ?>
                <form action="aksi_edit2.php" method="POST">
                    <tr>
                        <td>ID Anggota</td>
                        <td> : </td>
                        <td><input type="text" name="id_anggota" placeholder="masukkan ID" value="<?php echo $id_anggota; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nama Anggota</td>
                        <td> : </td>
                        <td><input type="text" name="nama_anggota" placeholder="masukkan nama" value="<?php echo $row['nama_anggota']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td> : </td>
                        <td>
                            <input type="radio" name="jk_anggota" value="L" <?php if($jk_anggota=='L'){echo 'checked';} ?> >Laki-Laki
                            <input type="radio" name="jk_anggota" value="P" <?php if($jk_anggota=='P'){echo 'checked';} ?> >Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td> : </td>
                        <td><input type="text" name="kelas_anggota" placeholder="masukkan kelas" value="<?php echo $row['kelas_anggota']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td> : </td>
                        <td>
                            <select name="jurusan_anggota">
                            <option>----- Pilih Jurusan -----</option>
                            <option value="RPL" <?php if($jurusan_anggota=='RPL'){echo 'selected=\"selected\"';} ?> >Rekayasa Perangkat Lunak</option>
                            <option value="TKJ" <?php if($jurusan_anggota=='TKJ'){echo 'selected=\"selected\"';} ?> >Teknik Komputer dan Jaringan</option>
                            <option value="MM" <?php if($jurusan_anggota=='MM'){echo 'selected=\"selected\"';} ?> >Multimedia</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telephone</td>
                        <td> : </td>
                        <td><input type="text" name="no_telp_anggota" placeholder="masukkan No HP" value="<?php echo $no_telp_anggota; ?>"></td>
                    </tr>
                    <tr>
                        <td>Alamat Anggota</td>
                        <td> : </td>
                        <td><input type="text" name="alamat_anggota" placeholder="masukkan alamat" value="<?php echo $row['alamat_anggota']; ?>"></td>
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