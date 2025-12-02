<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Modular</title>
    <link href="assets/css/style.css" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <header>
            <h1>Sistem Data Barang</h1>
            <nav>
                <a href="index.php?mod=barang&page=list">Daftar Barang</a>
    
                <a href="index.php?mod=barang&page=add">Tambah Barang</a>
    
                <a href="index.php?mod=auth&page=login">Login</a>
            </nav>
        </header>
        <hr>

<?php
// modules/barang/list.php
?>

<h3>Daftar Data Barang</h3>
<p><a href="index.php?mod=barang&page=add" style="background: blue; color: white; padding: 5px; text-decoration: none;">Tambah Data</a></p>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Pastikan nama tabel di sini sesuai dengan database kamu (misal: data_barang)
        $sql = "SELECT * FROM data_barang"; 
        $data_barang = $db->getAll($sql);
        $no = 1;

        if (count($data_barang) > 0) {
            foreach ($data_barang as $row) : 
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td>
                <?php if (!empty($row['gambar'])): ?>
                    <img src="uploads/<?= $row['gambar']; ?>" width="70">
                <?php else: ?>
                    <small>No Image</small>
                <?php endif; ?>
            </td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['kategori']; ?></td>
            <td>Rp <?= number_format($row['harga_beli']); ?></td>
            <td>Rp <?= number_format($row['harga_jual']); ?></td>
            <td><?= $row['stok']; ?></td>
            <td>
                <a href="index.php?mod=barang&page=edit&id=<?= $row['id_barang']; ?>">Ubah</a> |
                <a href="index.php?mod=barang&page=delete&id=<?= $row['id_barang']; ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php 
            endforeach; 
        } else {
            echo "<tr><td colspan='8' align='center'>Data Kosong</td></tr>";
        }
        ?>
    </tbody>
</table>