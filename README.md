# Praktikum 10 - PHP OOP
**Nama:** Rizky Maulana 
**Kelas:** TI.24.A.3  
**NIM:** 312410430  
**Mata Kuliah:** Pemrograman Web  
**Dosen Pengampu:** Agung Nugroho, S.Kom., M.Kom  
**Universitas Pelita Bangsa**

---

## 🧩 Langkah-langkah Praktikum

### Menjalankan MySQL Server

Untuk menjalankan MySQL Server dari menu XAMPP Control panel.

<img width="496" height="322" alt="1 xampp" src="https://github.com/user-attachments/assets/920214aa-0387-4281-a205-58be7f9ca7cd" />

---

### Buat folder baru dengan nama ```lab10_php_oop``` pada docroot webserver ```(htdocs)```

Akses direktory tersebut pada web server dengan mengakses URL: http://localhost/lab10_php_oop/

Outputnya:

<img width="959" height="560" alt="2 readme" src="https://github.com/user-attachments/assets/d14e4eb3-f617-4eb2-8c42-e4d102ee66f0" />


---

### Membuat file baru dengan nama ```mobil.php```

Code:

<img width="1048" height="1812" alt="3 readme" src="https://github.com/user-attachments/assets/22dd8921-c2b9-4b62-bf04-22325999f067" />


Outputnya:

<img width="959" height="562" alt="4 readme" src="https://github.com/user-attachments/assets/f1306cf0-b954-4cf2-99e6-3f15ed1f07be" />


---

### Membuat file baru dengan nama ```form.php```

Code:


<img width="1696" height="1660" alt="5 readme" src="https://github.com/user-attachments/assets/1453d73d-22e7-4002-8480-343d762e948f" />

---

### Membuat file baru dengan nama ```form_input.php```

Code:

<img width="1202" height="900" alt="6 readme" src="https://github.com/user-attachments/assets/9baa1727-03c4-4a4e-89d1-bf798dbc9265" />


Outputnya:

<img width="959" height="557" alt="7 readme" src="https://github.com/user-attachments/assets/dba57714-f998-45da-9135-daa1c1ecdca9" />


---

### Membuat file baru dengan nama ```database.php```

Code:


<img width="1770" height="4434" alt="8 readme" src="https://github.com/user-attachments/assets/f71cb493-c985-415f-b3e7-8409d4e21d29" />

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


<img width="1648" height="1736" alt="9 readme" src="https://github.com/user-attachments/assets/3fd8e2c1-f0a1-443c-b47f-39e90c3ee48b" />

-----

## 8. Code Library/Form.PHP

<img width="1972" height="1204" alt="10 readme" src="https://github.com/user-attachments/assets/fb04f937-cfed-4ce5-b196-bcd6d4736830" />


-----

## 9. Output

<img width="959" height="563" alt="11 readme" src="https://github.com/user-attachments/assets/5faa005b-f4e3-402a-b5fc-a449e58dbc67" />


**Output Form Tambah Produk**

<img width="959" height="564" alt="12 readme" src="https://github.com/user-attachments/assets/fd22b1c4-990b-49a7-9e1c-ee6e6ac832a3" />


**Output isi Form Produk**

<img width="959" height="563" alt="13 readme" src="https://github.com/user-attachments/assets/90006c33-368d-4c09-a950-41674ce10d6e" />


**Output Hasilnya**

<img width="959" height="563" alt="14 readme" src="https://github.com/user-attachments/assets/9a147a74-a25f-4851-83a2-51932270cb9a" />


Data akan tersimpan otomatis di Database.

-----
