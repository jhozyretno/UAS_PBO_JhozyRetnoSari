<?php
// 1. Panggil file koneksi dan semua class
require_once 'koneksi.php';
require_once 'KaryawanTetap.php';
require_once 'KaryawanKontrak.php';
require_once 'KaryawanMagang.php';

// 2. Ambil data dari database
$query = "SELECT * FROM Karyawan ORDER BY nama_karyawan ASC";
$stmt = $pdo->query($query);
$semuaKaryawan = $stmt->fetchAll();

// 3. Kelompokkan data
$dataTetap   = array_filter($semuaKaryawan, function($k) { return $k['tipe_karyawan'] == 'Tetap'; });
$dataKontrak = array_filter($semuaKaryawan, function($k) { return $k['tipe_karyawan'] == 'Kontrak'; });
$dataMagang  = array_filter($semuaKaryawan, function($k) { return $k['tipe_karyawan'] == 'Magang'; });
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Slip Gaji</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 30px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #333; color: #fff; }
        .gaji { font-weight: bold; color: green; }
    </style>
</head>
<body>

<h1>Slip Gaji Karyawan</h1>

<h2>Karyawan Tetap</h2>
<table>
    <tr><th>ID</th><th>Nama</th><th>Tunjangan</th><th>Saham</th><th>Gaji Bersih</th></tr>
    <?php foreach ($dataTetap as $row): 
        $k = new KaryawanTetap($row['id_karyawan'], $row['nama_karyawan'], $row['departemen'], $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'], $row['tunjangan_kesehatan'], $row['opsi_saham_id']);
    ?>
    <tr>
        <td><?= $row['id_karyawan'] ?></td><td><?= $row['nama_karyawan'] ?></td>
        <td><?= number_format($row['tunjangan_kesehatan']) ?></td><td><?= $row['opsi_saham_id'] ?></td>
        <td class="gaji">Rp <?= number_format($k->hitungGajiBersih()) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Karyawan Kontrak</h2>
<table>
    <tr><th>ID</th><th>Nama</th><th>Durasi</th><th>Agensi</th><th>Gaji Bersih</th></tr>
    <?php foreach ($dataKontrak as $row): 
        $k = new KaryawanKontrak($row['id_karyawan'], $row['nama_karyawan'], $row['departemen'], $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'], $row['durasi_kontrak_bulan'], $row['agensi_penyalur']);
    ?>
    <tr>
        <td><?= $row['id_karyawan'] ?></td><td><?= $row['nama_karyawan'] ?></td>
        <td><?= $row['durasi_kontrak_bulan'] ?> Bulan</td><td><?= $row['agensi_penyalur'] ?></td>
        <td class="gaji">Rp <?= number_format($k->hitungGajiBersih()) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Karyawan Magang</h2>
<table>
    <tr><th>ID</th><th>Nama</th><th>Kampus Merdeka</th><th>Uang Saku</th><th>Gaji Bersih</th></tr>
    <?php foreach ($dataMagang as $row): 
        $k = new KaryawanMagang($row['id_karyawan'], $row['nama_karyawan'], $row['departemen'], $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'], $row['uang_saku_bulanan'], $row['sertifikat_kampus_merdeka']);
    ?>
    <tr>
        <td><?= $row['id_karyawan'] ?></td><td><?= $row['nama_karyawan'] ?></td>
        <td><?= $row['sertifikat_kampus_merdeka'] ? 'Ya' : 'Tidak' ?></td>
        <td><?= number_format($row['uang_saku_bulanan']) ?></td>
        <td class="gaji">Rp <?= number_format($k->hitungGajiBersih()) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>