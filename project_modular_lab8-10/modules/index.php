<?php

require_once 'libs/Database.php';
require_once 'libs/Form.php';

$db = new Database();
$form = new Form();

include 'views/header.php';

$mod = isset($_GET['mod']) ? $_GET['mod'] : 'home';
$page = isset($_GET['page']) ? $_GET['page'] : 'index';


$file = "modules/$mod/$page.php";


if (file_exists($file)) {

    include $file;
} else {

    echo "<div style='margin: 50px; text-align: center;'>";
    echo "<h3>404 - Halaman Tidak Ditemukan</h3>";
    echo "<p>Sistem mencari file: <code>$file</code> tapi tidak ada.</p>";
    echo "<p>Pastikan nama folder di <b>modules/</b> sudah benar.</p>";
    echo "</div>";
}

include 'views/footer.php';
?>