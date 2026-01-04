<?php
include '../config/koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM data_barang WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="container mt-4">
<h3>Edit Barang</h3>

<form action="update.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    <div class="mb-2">
        <label>Nama Barang</label>
        <input type="text" name="nama" class="form-control"
               value="<?= $data['nama']; ?>">
    </div>

    <div class="mb-2">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control"
               value="<?= $data['kategori']; ?>">
    </div>

    <div class="mb-2">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control"
               value="<?= $data['harga']; ?>">
    </div>

    <div class="mb-2">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control"
               value="<?= $data['stok']; ?>">
    </div>

    <div class="mb-3">
        <label>Gambar (kosongkan jika tidak ganti)</label>
        <input type="file" name="gambar" class="form-control">
    </div>

    <button class="btn btn-purple">Update</button>
    <a href="../index.php" class="btn btn-secondary">Kembali</a>

</form>
</div>

</body>
</html>
