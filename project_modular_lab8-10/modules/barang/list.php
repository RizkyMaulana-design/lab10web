<?php
// File: modules/barang/list.php
?>
<h3>Daftar Data Barang</h3>

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
        // Pastikan nama tabel di database kamu benar (biasanya 'data_barang' atau 'barang')
        // Sesuaikan query ini dengan nama tabelmu!
        $sql = "SELECT * FROM data_barang"; 
        
        $result = $db->query($sql);
        $no = 1;

        // Cek jika ada data
        if ($result->num_rows > 0):
            while($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td>
                <?php if (!empty($row['gambar'])): ?>
                    <img src="uploads/<?= $row['gambar']; ?>" width="80">
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
                <a href="index.php?mod=barang&page=delete&id=<?= $row['id_barang']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php 
            endwhile; 
        else:
        ?>
            <tr><td colspan="8" align="center">Data Kosong</td></tr>
        <?php endif; ?>
    </tbody>
</table>