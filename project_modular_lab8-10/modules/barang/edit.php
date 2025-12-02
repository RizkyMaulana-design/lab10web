<h3>Edit Data User</h3>

<?php
$id = $_GET['id'];

// Proses Update Data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $db->escape($_POST['nama']);
    $email = $db->escape($_POST['email']);
    
    // Logic update sederhana
    $sql = "UPDATE users SET nama='$nama', email='$email' WHERE id_user='$id'";
    
    if ($db->query($sql)) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='index.php?mod=user&page=list';</script>";
    } else {
        echo "Gagal update data.";
    }
}

// Ambil data lama untuk ditampilkan di form
$data = $db->getOne("SELECT * FROM users WHERE id_user='$id'");

// Tampilkan Form dengan value lama
echo $form->open("index.php?mod=user&page=edit&id=$id");
echo $form->input('text', 'nama', 'Nama Lengkap', $data['nama']);
echo $form->input('email', 'email', 'Email Address', $data['email']);
echo "<p><small>Password tidak diubah di menu ini.</small></p>";
echo $form->submit('Update Data');
echo $form->close();
?>