<?php
require 'koneksi.php';
$cari = '';
if (isset($_GET['cari'])) {
$cari = mysqli_real_escape_string($conn, $_GET['cari']);
}
$hasil = mysqli_query($conn,
"SELECT * FROM showroom_mobil
WHERE nama_mobil LIKE '%$cari%' OR brand_mobil LIKE '%$cari%'
ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>ShowRoom EAD</title>
<link rel="stylesheet" href="style.css">
</head>
<body><main>
<p class="label">PRAKTIKUM PAW / MODUL 2</p>
<h1>ShowRoom EAD</h1>
<p>Kelola data mobil yang tersedia di showroom.</p>
<?php if (isset($_GET['pesan'])): ?>
<p class="pesan">Perubahan data berhasil disimpan.</p>
<?php endif; ?>
<p><a class="tombol" href="tambah.php">Tambah mobil</a></p>