# 📦 Aplikasi Data Barang (Pagination)

Aplikasi web sederhana berbasis **PHP & MySQL** untuk mengelola data barang  
dengan fitur **CRUD, pencarian, dan pagination**.  
Dibuat untuk keperluan **Praktikum Web (13–14)**.

---

## ✨ Fitur
- Menampilkan data barang
- Tambah, edit, dan hapus data
- Pencarian data barang
- Pagination
- Tampilan menggunakan Bootstrap
- Footer warna hijau

---

## 🖼️ Screenshot Aplikasi

> Berikut tampilan aplikasi setelah dijalankan di browser.

### 📌 Halaman Data Barang
![Halaman Data Barang](https://github.com/dirarohmaeni/Lab13_14Web/blob/647c803bc4212c68fc9a5fde25bf04eebb0c691c/lab13-14/list.png)

### 📌 Pagination
![Pagination](https://github.com/dirarohmaeni/Lab13_14Web/blob/647c803bc4212c68fc9a5fde25bf04eebb0c691c/lab13-14/pagination.png)

### 📌 Tambah Data Barang
![Tambah Data Barang](https://github.com/dirarohmaeni/Lab13_14Web/blob/647c803bc4212c68fc9a5fde25bf04eebb0c691c/lab13-14/tambah.png)

### 📌 Tambah Edit Barang
![Tambah Data Barang](https://github.com/dirarohmaeni/Lab13_14Web/blob/647c803bc4212c68fc9a5fde25bf04eebb0c691c/lab13-14/edit.png)

### 📌 Tambah Hapus Barang
![Tambah Data Barang](https://github.com/dirarohmaeni/Lab13_14Web/blob/647c803bc4212c68fc9a5fde25bf04eebb0c691c/lab13-14/hapus.png)

### 📌 Tambah Cari Barang
![Tambah Data Barang](https://github.com/dirarohmaeni/Lab13_14Web/blob/647c803bc4212c68fc9a5fde25bf04eebb0c691c/lab13-14/cari.png)

---

## 🛠️ Teknologi
- PHP (Native)
- MySQL
- Bootstrap 5
- HTML & CSS

---

## 📁 Struktur Folder
```
pagination/
├── index.php
├── assets/
│ └── css/
│ └── style.css
├── config/
│ └── koneksi.php
├── data/
│ ├── tambah.php
│ ├── simpan.php
│ ├── edit.php
│ └── update.php
├── images/
│ ├── panah.jpg
│ ├── busur.jpg
│ ├── pulpen.jpg
│ ├── penggaris.jpg
│ └── buku.jpg
└── layout/
├── header.php
└── footer.php
```

---

## 🗄️ Database
**Nama Database:** `db_barang`  
**Tabel:** `data_barang`

### Struktur Tabel
```sql
CREATE TABLE data_barang (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    kategori VARCHAR(50),
    harga INT,
    gambar VARCHAR(100),
    stok INT
);
```

▶️ Cara Menjalankan

1. Pindahkan folder project ke: xampp/htdocs/
2. alankan Apache & MySQL di XAMPP

3. Import database ```db_barang``` melalui phpMyAdmin

4. Akses di browser: http://localhost/pagination/index.php

---

📌 Catatan

- Pagination akan muncul jika jumlah data lebih dari data per halaman

- Pastikan path file CSS dan gambar sudah benar

- Aplikasi ini dibuat untuk pembelajaran (praktikum)

---

👤 Author

Nama: Dira Rohmaeni


NIM: 312410465


Tahun: 2025


Mata Kuliah: Pemrograman WEB 1


© 2025 - Praktikum 13–14 Web
