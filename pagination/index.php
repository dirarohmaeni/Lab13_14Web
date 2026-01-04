<?php
include 'config/koneksi.php';

$q = '';
$where = '';

if (!empty($_GET['q'])) {
    $q = $_GET['q'];
    $where = "WHERE nama LIKE '%$q%'";
}

$per_page = 2;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $per_page;

$count = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(*) FROM data_barang $where"))[0];
$total_page = ceil($count / $per_page);

$data = mysqli_query($conn, "SELECT * FROM data_barang $where LIMIT $offset,$per_page");

include 'layout/header.php';
?>

<div class="d-flex justify-content-between mb-3">
    <a href="data/tambah.php" class="btn btn-success">+ Tambah Barang</a>
    <form class="d-flex">
        <input type="text" name="q" class="form-control me-2" placeholder="Cari..." value="<?= $q ?>">
        <button class="btn btn-success">Cari</button>
    </form>
</div>

<div class="card shadow-sm">
<div class="card-body p-0">
<table class="table table-hover mb-0">
<thead class="table-success">
<tr>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Kategori</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>
</thead>
<tbody>
<?php while ($row = mysqli_fetch_assoc($data)) : ?>
<tr>
    <td><img src="images/<?= $row['gambar'] ?>" width="60"></td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['kategori'] ?></td>
    <td><?= number_format($row['harga']) ?></td>
    <td><?= $row['stok'] ?></td>
    <td>
        <a href="data/edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="data/update.php?hapus=<?= $row['id'] ?>" class="btn btn-danger btn-sm"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>
</tbody>
</table>
</div>
</div>

<nav class="mt-4">
    <ul class="pagination justify-content-center">

        <!-- PREV -->
        <?php if ($page > 1): ?>
        <li class="page-item">
            <a class="page-link" href="?page=<?= $page - 1 ?>">«</a>
        </li>
        <?php endif; ?>

        <!-- NOMOR -->
        <?php for ($i = 1; $i <= $total_page; $i++): ?>
            <li class="page-item <?= ($page == $i) ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $i ?>">
                    <?= $i ?>
                </a>
            </li>
        <?php endfor; ?>

        <!-- NEXT -->
        <?php if ($page < $total_page): ?>
        <li class="page-item">
            <a class="page-link" href="?page=<?= $page + 1 ?>">»</a>
        </li>
        <?php endif; ?>

    </ul>
</nav>

<?php include 'layout/footer.php'; ?>