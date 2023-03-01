<html>
<head>
    <title>Daftar Anggota</title>
</head>
<body>
    <h3>List Anggota</h3>
    <a href="tambah2.php">Tambah Anggota</a>
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
                <a href="aksi_hapus2.php?id=<?php echo $data['id_anggota'];?>" onclick="return confirm('Apakah bujuran yakin')">Hapus</a> 
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>