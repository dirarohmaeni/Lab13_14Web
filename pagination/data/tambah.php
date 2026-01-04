<?php include '../config/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="container mt-4">
<h3>Tambah Barang</h3>

<form action="simpan.php" method="post" enctype="multipart/form-data">

    <div class="mb-2">
        <label>Nama Barang</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-2">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control">
    </div>

    <div class="mb-2">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control">
    </div>

    <div class="mb-2">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control">
    </div>

    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>

    <button class="btn btn-purple">Simpan</button>
    <a href="../index.php" class="btn btn-secondary">Kembali</a>

</form>
</div>

</body>
</html>