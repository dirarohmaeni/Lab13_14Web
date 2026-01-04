<?php
include '../config/koneksi.php';

$nama     = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga    = $_POST['harga'];
$stok     = $_POST['stok'];

$gambar = $_FILES['gambar']['name'];
$tmp    = $_FILES['gambar']['tmp_name'];

if ($gambar != "") {
    move_uploaded_file($tmp, "../images/".$gambar);
}

mysqli_query($conn, "INSERT INTO data_barang
(nama, kategori, harga, stok, gambar)
VALUES ('$nama','$kategori','$harga','$stok','$gambar')");

header("Location: ../index.php");
