<?php
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id_user='$id'";

if ($db->query($sql)) {
    echo "<script>alert('Data terhapus!'); window.location='index.php?mod=user&page=list';</script>";
} else {
    echo "Gagal menghapus data.";
}
?>