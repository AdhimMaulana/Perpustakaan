<html>
<head>
    <title>Daftar Pengembalian</title>
</head>
<body>
    <h3>List Pengembalian</h3>
    <a href="tambah5.php">Tambah Pengembalian</a>
    <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>ID Pengembalian</th>
            <th>Tanggal Pengembalian</th>
            <th>Denda</th>
            <th>ID Buku</th>
            <th>ID Petugas</th>
            <th>ID Anggota</th>
            <th>Aksi</th>
        </tr>
        <?php
            //panggil koneksi
        include 'koneksi5.php';

        $query_mysql    =   mysqli_query($conn, "SELECT * FROM pengembalian") 
                            or die (mysqli_error()); 
        $nomor          = 1;
        while($data = mysqli_fetch_assoc($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_pengembalian'] ?></td>
            <td><?php echo $data['tanggal_pengembalian'] ?></td>
            <td><?php echo $data['denda'] ?></td>
            <td><?php echo $data['id_buku'] ?></td>
            <td><?php echo $data['id_petugas'] ?></td>
            <td><?php echo $data['id_anggota'] ?></td>
            <td> 
        
                <a href="edit5.php?id=<?php echo $data['id_pengembalian']; ?>">Edit</a> | 
                <a href="aksi_hapus5.php?id=<?php echo $data['id_pengembalian'];?>" onclick="return confirm('Apakah yakin ?')">Hapus</a> 
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>