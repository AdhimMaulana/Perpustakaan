<html>
<head>
    <title>Daftar Peminjaman</title>
</head>
<body>
    <h3>List Peminjaman</h3>
    <a href="tambah4.php">Tambah Peminjaman</a>
    <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>ID Peminjaman</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>ID Buku</th>
            <th>ID Petugas</th>
            <th>ID Anggota</th>
            <th>Aksi</th>
        </tr>
        <?php
            //panggil koneksi
        include 'koneksi4.php';

        $query_mysql    =   mysqli_query($conn, "SELECT * FROM peminjaman") 
                            or die (mysqli_error()); 
        $nomor          = 1;
        while($data = mysqli_fetch_assoc($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_peminjaman'] ?></td>
            <td><?php echo $data['tanggal_pinjam'] ?></td>
            <td><?php echo $data['tanggal_kembali'] ?></td>
            <td><?php echo $data['id_buku'] ?></td>
            <td><?php echo $data['id_petugas'] ?></td>
            <td><?php echo $data['id_anggota'] ?></td>
            <td> 
        
                <a href="edit4.php?id=<?php echo $data['id_peminjaman']; ?>">Edit</a> | 
                <a href="aksi_hapus4.php?id=<?php echo $data['id_peminjaman'];?>" onclick="return confirm('Apakah yakin ?')">Hapus</a> 
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>