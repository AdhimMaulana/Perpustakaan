<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h3>List Buku</h3>
    <a href="tambah3.php">Tambah Buku</a>
    <table border="1" width="100%">
         <tr>
            <th>No</th>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penulis Buku</th>
            <th>Penerbit Buku</th>
            <th>Tahun Penerbit</th>
            <th>Stok Buku</th>
            <th>Aksi</th>
        </tr>
        <?php
        
        //panggil koneksi
        include 'koneksi3.php';

        $query_mysql    =   mysqli_query($conn, "SELECT * FROM buku") 
                            or die (mysqli_error()); 
        $nomor          = 1;
        while($data = mysqli_fetch_assoc($query_mysql)) {
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_buku'] ?></td>
            <td><?php echo $data['judul_buku'] ?></td>
            <td><?php echo $data['penulis_buku'] ?></td>
            <td><?php echo $data['penerbit_buku'] ?></td>
            <td><?php echo $data['tahun_penerbit_buku'] ?></td>
            <td><?php echo $data['stok_buku'] ?></td>
            <td> 
                <a href="edit3.php?id=<?php echo $data['id_buku']; ?>">Edit</a> | 
                <a href="aksi_hapus3.php?id=<?php echo $data['id_buku'];?>" onclick="return confirm('Apakah yakin ?')">Hapus</a> 
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>