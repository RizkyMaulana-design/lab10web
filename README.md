# Praktikum 10 - PHP OOP
**Nama:** Mahfuz Fauzi  
**Kelas:** TI.24.A.3  
**NIM:** 312410412  
**Mata Kuliah:** Pemrograman Web  
**Dosen Pengampu:** Agung Nugroho, S.Kom., M.Kom  
**Universitas Pelita Bangsa**

---

## 🧩 Langkah-langkah Praktikum

### Menjalankan MySQL Server

Untuk menjalankan MySQL Server dari menu XAMPP Control panel.

<img src="https://github.com/Mahfuz311/Lab8Web/blob/cc1f6d0de626cf37fc95bafc566f4ea340f1e9a4/screenshot/1%20xampp.png" width="40%">

---

### Buat folder baru dengan nama ```lab9_php_oop``` pada docroot webserver ```(htdocs)```

Akses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab10_php_oop/

Outputnya:

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/0.%20output.png" width="800">

---

### Membuat file baru dengan nama ```mobil.php```

Code:

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/1.%20vscode.png" width="40%">

Outputnya:

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/2.%20output.png" width="800">

---

### Membuat file baru dengan nama ```form.php```

Code:

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/3.%20vscode.png" width="40%">

---

### Membuat file baru dengan nama ```form_input.php```

Code:

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/4.%20vscode.png" width="40%">

Outputnya:

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/5.%20output.png" width="800">

---

### Membuat file baru dengan nama ```database.php```

Code:

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/6.%20vscode.png" width="40%">

---

# Jawaban Tugas

## 1. Deskripsi Project
Aplikasi ini adalah sistem manajemen data barang yang dibangun menggunakan **PHP Native** dengan pendekatan:
* **Modular:** Memecah kode menjadi modul-modul terpisah agar mudah dikelola.
* **Object-Oriented Programming (OOP):** Menggunakan Class untuk koneksi database dan pembuatan form.
* **Dynamic Routing:** Navigasi menggunakan parameter URL (`?mod=...&page=...`).

---

## 2. Struktur Folder & File

```text
PROJECT_MODULAR_LAB8-10/
│
├── assets/
│   └── css/
│       └── style.css          # File CSS untuk desain tampilan
│
├── libs/                      # FOLDER LIBRARY (Inti Sistem OOP)
│   ├── Database.php           # Class untuk koneksi ke MySQL & Query
│   └── Form.php               # Class untuk generate Form HTML otomatis
│
├── modules/                   # FOLDER MODUL (Fitur/Halaman)
│   ├── auth/
│   │   └── login.php          # Halaman Login
│   │
│   └── barang/                # Modul Data Barang (CRUD)
│       ├── add.php            # Logic tambah data & upload gambar
│       ├── delete.php         # Logic hapus data
│       ├── edit.php           # Form edit data
│       └── list.php           # Tabel daftar barang
│
├── uploads/                   # FOLDER PENYIMPANAN GAMBAR
│   ├── hp_samsung.png
│   ├── hp_iphone.png
│   └── ... (File gambar tersimpan di sini)
│
├── views/                     # FOLDER TEMPLATE (Layout)
│   ├── footer.php             # Bagian kaki website
│   └── header.php             # Bagian kepala website (Navigasi)
│
├── index.php                  # MAIN CONTROLLER (Pintu utama aplikasi)
└── README.md                  # Dokumentasi project ini
````

-----

## 3\. Skema Database

Buat database baru `latihan1` di PHPMyAdmin, lalu jalankan query SQL berikut untuk membuat tabel.

```sql
CREATE TABLE `data_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `harga_beli` decimal(12,0) DEFAULT NULL,
  `harga_jual` decimal(12,0) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
);
```

-----

## 4\. Konfigurasi

Sebelum menjalankan aplikasi, sesuaikan konfigurasi database di file `libs/Database.php`:

```php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'latihan1';
    // ...
}
```

-----

## 5\. Cara Penggunaan (Routing)

Aplikasi ini tidak membuka file modul secara langsung, melainkan melalui `index.php`.

**Format URL:**

http://localhost/project_modular_lab8-10/index.php?mod=barang&page=list

**Contoh Navigasi:**

1.  **Lihat Daftar Barang:**
      * URL: `index.php?mod=barang&page=list`
      * File yang dibuka: `modules/barang/list.php`
2.  **Tambah Barang:**
      * URL: `index.php?mod=barang&page=add`
      * File yang dibuka: `modules/barang/add.php`
3.  **Halaman Login:**
      * URL: `index.php?mod=auth&page=login`
      * File yang dibuka: `modules/auth/login.php`

-----

## 6\. Fitur Utama

1.  **Class Form:** Membuat elemen input form dengan script PHP (`$form->input()`), mendukung upload file otomatis.
2.  **Class Database:** Membungkus koneksi `mysqli` menjadi object agar kode lebih bersih.
3.  **Upload Gambar:** Gambar produk diupload ke folder `uploads/` dan nama filenya disimpan di database.

-----

## 7. Code Class Library/Database.PHP

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/7.%20vscode.png" width="40%">

-----

## 8. Code Library/Form.PHP

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/8.%20vscode.png" width="40%">

-----

## 9. Output

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/9.%20output.png" width="800">

**Output Form Tambah Produk**

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/10.%20output.png" width="800">

**Output isi Form Produk**

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/11.%20output.png" width="800">

**Output Hasilnya**

<img src="https://github.com/Mahfuz311/Lab10Web/blob/eb237fb0c63321f91647791e0740bc9012d64545/lab10_php_oop/screenshot/12.%20output.png" width="800">

Data akan tersimpan otomatis di Database.

-----
