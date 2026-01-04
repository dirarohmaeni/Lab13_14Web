<?php
include '../config/koneksi.php';

$id       = $_POST['id'];
$nama     = $_POST['nama'];
$kategori = $_POST['kategori'];
$harga    = $_POST['harga'];
$stok     = $_POST['stok'];

$gambar = $_FILES['gambar']['name'];
$tmp    = $_FILES['gambar']['tmp_name'];

if ($gambar != "") {
    move_uploaded_file($tmp, "../images/".$gambar);
    $sql = "UPDATE data_barang SET
            nama='$nama',
            kategori='$kategori',
            harga='$harga',
            stok='$stok',
            gambar='$gambar'
            WHERE id=$id";
} else {
    $sql = "UPDATE data_barang SET
            nama='$nama',
            kategori='$kategori',
            harga='$harga',
            stok='$stok'
            WHERE id=$id";
}

mysqli_query($conn, $sql);
header("Location: ../index.php");
