
---

<h1 align="center" style="font-size: 40px; background: linear-gradient(to right, #00c6ff, #0072ff); -webkit-background-clip: text; color: transparent;">
  PRAKTIKUM 10 – PHP OOP
</h1>

### **Universitas Pelita Bangsa **

> **Nama:** Rizky Maulana

> **Kelas:** TI.24.A.3

> **NIM:** 312410430

> **Mata Kuliah:** Pemrograman Web

> **Dosen Pengampu:** Agung Nugroho, S.Kom., M.Kom

---

<div align="center">

# ✨🔥 **LAPORAN PRAKTIKUM**

### *Full Dark • Neon Glow • 3D Shadow UI*

</div>

---

# 🧩 **Langkah-langkah Praktikum**

---

## 🌐 **Menjalankan MySQL Server**

Jalankan MySQL melalui **XAMPP Control Panel**.

<div align="center">
<img src="https://github.com/user-attachments/assets/920214aa-0387-4281-a205-58be7f9ca7cd" width="496" height="322" style="filter: drop-shadow(0 0 18px #00eaff);" />
</div>

---

## 📁 **Buat folder baru `lab10_php_oop` pada htdocs**

Akses:

🔗 **[http://localhost/lab10_php_oop/](http://localhost/lab10_php_oop/)**

<div align="center">
<img src="https://github.com/user-attachments/assets/d14e4eb3-f617-4eb2-8c42-e4d102ee66f0" width="959" height="560" style="filter: drop-shadow(0 0 20px #8e00ff);" />
</div>

---

## 💻 **Membuat file `mobil.php`**

### **Code:**

<div align="center">
<img src="https://github.com/user-attachments/assets/22dd8921-c2b9-4b62-bf04-22325999f067" width="1048" height="1812" style="filter: drop-shadow(0 0 22px #00ffbf);" />
</div>

### **Output:**

<div align="center">
<img src="https://github.com/user-attachments/assets/f1306cf0-b954-4cf2-99e6-3f15ed1f07be" width="959" height="562" style="filter: drop-shadow(0 0 18px #00b7ff);" />
</div>

---

## 📝 **Membuat file `form.php`**

<div align="center">
<img src="https://github.com/user-attachments/assets/1453d73d-22e7-4002-8480-343d762e948f" width="1696" height="1660" style="filter: drop-shadow(0 0 22px #ff00c8);" />
</div>

---

## 🗂 **Membuat file `form_input.php`**

### **Code:**

<div align="center">
<img src="https://github.com/user-attachments/assets/9baa1727-03c4-4a4e-89d1-bf798dbc9265" width="1202" height="900" style="filter: drop-shadow(0 0 22px #00ff8c);" />
</div>

### **Output:**

<div align="center">
<img src="https://github.com/user-attachments/assets/dba57714-f998-45da-9135-daa1c1ecdca9" width="959" height="557" style="filter: drop-shadow(0 0 22px #7d00ff);" />
</div>

---

## 🗄 **Membuat file `database.php`**

<div align="center">
<img src="https://github.com/user-attachments/assets/f71cb493-c985-415f-b3e7-8409d4e21d29" width="1770" height="4434" style="filter: drop-shadow(0 0 25px #00ffe0);" />
</div>

---

# 🎯 **Jawaban Tugas**

## **1. Deskripsi Project**

Aplikasi ini adalah sistem manajemen data barang berbasis **PHP Native** dengan pendekatan:

🔹 **Modular**
🔹 **OOP (Object-Oriented Programming)**
🔹 **Dynamic Routing dengan parameter URL**

> Semua penjelasan tetap sama seperti asli, hanya dibuat lebih rapi.

---

## **2. Struktur Folder & File**

```
PROJECT_MODULAR_LAB8-10/
│
├── assets/
│   └── css/
│       └── style.css
│
├── libs/
│   ├── Database.php
│   └── Form.php
│
├── modules/
│   ├── auth/
│   │   └── login.php
│   └── barang/
│       ├── add.php
│       ├── delete.php
│       ├── edit.php
│       └── list.php
│
├── uploads/
├── views/
│   ├── footer.php
│   └── header.php
│
└── index.php
```

---

## **3. Skema Database**

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

---

## **4. Konfigurasi Database**

```php
class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'latihan1';
}
```

---

## **5. Cara Penggunaan (Routing)**

Contoh URL:

✔ Lihat Data Barang
`index.php?mod=barang&page=list`

✔ Tambah Barang
`index.php?mod=barang&page=add`

✔ Login
`index.php?mod=auth&page=login`

---

## **6. Fitur Utama**

⭐ Class Form otomatis membuat elemen HTML
⭐ Class Database membungkus koneksi mysqli
⭐ Upload file ke folder `/uploads/`

---

## **7. Code Library Database.PHP**

<div align="center">
<img src="https://github.com/user-attachments/assets/3fd8e2c1-f0a1-443c-b47f-39e90c3ee48b" width="1648" height="1736" style="filter: drop-shadow(0 0 25px #ff4fff);" />
</div>

---

## **8. Code Library Form.PHP**

<div align="center">
<img src="https://github.com/user-attachments/assets/fb04f937-cfed-4ce5-b196-bcd6d4736830" width="1972" height="1204" style="filter: drop-shadow(0 0 25px #00faff);" />
</div>

---

# 📸 **Output**

### **Daftar Barang**

<div align="center">
<img src="https://github.com/user-attachments/assets/5faa005b-f4e3-402a-b5fc-a449e58dbc67" width="959" height="563" style="filter: drop-shadow(0 0 20px #00ffcc);" />
</div>

---

### **Form Tambah Produk**

<div align="center">
<img src="https://github.com/user-attachments/assets/fd22b1c4-990b-49a7-9e1c-ee6e6ac832a3" width="959" height="564" style="filter: drop-shadow(0 0 20px #ff00bf);" />
</div>

---

### **Form Isi Produk**

<div align="center">
<img src="https://github.com/user-attachments/assets/90006c33-368d-4c09-a950-41674ce10d6e" width="959" height="563" style="filter: drop-shadow(0 0 20px #00ffe7);" />
</div>

---

### **Output Hasilnya**

<div align="center">
<img src="https://github.com/user-attachments/assets/9a147a74-a25f-4851-83a2-51932270cb9a" width="959" height="563" style="filter: drop-shadow(0 0 20px #ffd000);" />
</div>

---
