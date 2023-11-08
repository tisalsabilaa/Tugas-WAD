<?php
require 'function.php';
$barang = query("SELECT * FROM skincare")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HALAMAN ADMIN</title>
    </head>
    <body>
        <h1>Daftar Barang Toko AA</h1>

        <a href="tambah.php">Tambah Data Barang Toko AA</a>
        <br><br>
        
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No. </th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
            </tr>
            <?php $i = 1;
            foreach ($barang as $row) : ?> 
            
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?no=<?= $row['no']; ?>">Ubah</a>
                    <a href="hapus.php?no= <?= $row["no"];?>" onclick="return confirm('Yakin dihapus?');">Hapus</a>
                </td>
                <td><img src="img/<?= $row['gambar']; ?>" width="50"></td>
                <td><?= $row["namabarang"]; ?></td>
                <td><?= $row["kodebarang"]; ?></td>
                <td><?= $row["hargajual"]; ?></td>
                <td><?= $row["stokbarang"]; ?></td>
            </tr>

            <?php
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>
