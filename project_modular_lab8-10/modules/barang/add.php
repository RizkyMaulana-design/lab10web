<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $db->escape($_POST['nama']);
    $kategori = $db->escape($_POST['kategori']);
    $harga_beli = $db->escape($_POST['harga_beli']);
    $harga_jual = $db->escape($_POST['harga_jual']);
    $stok = $db->escape($_POST['stok']);
    
    $gambar = "";
    if (!empty($_FILES['gambar']['name'])) {
        $nama_file = $_FILES['gambar']['name'];
        $tmp_file = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmp_file, "uploads/" . $nama_file);
        $gambar = $nama_file;
    }

    $sql = "INSERT INTO data_barang (nama, kategori, harga_beli, harga_jual, stok, gambar) 
            VALUES ('$nama', '$kategori', '$harga_beli', '$harga_jual', '$stok', '$gambar')";

    if ($db->query($sql)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='index.php?mod=barang&page=list';</script>";
    } else {
        echo "<p style='color:red'>Gagal menyimpan data!</p>";
    }
}
?>

<h3>Tambah Data Barang</h3>

<?php

echo $form->open('index.php?mod=barang&page=add', 'POST', true);

echo $form->input('text', 'nama', 'Nama Barang');
echo $form->input('text', 'kategori', 'Kategori', '', 'Elektronik / Pakaian / dll');
echo $form->input('number', 'harga_beli', 'Harga Beli (Rp)');
echo $form->input('number', 'harga_jual', 'Harga Jual (Rp)');
echo $form->input('number', 'stok', 'Stok Awal');
echo $form->input('file', 'gambar', 'Foto Produk');

echo $form->submit('Simpan Data');
echo $form->close();
?>