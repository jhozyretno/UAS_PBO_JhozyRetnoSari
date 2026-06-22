<?php
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    protected $uangSakuBulanan;
    protected $sertifikatKampusMerdeka;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $uangSakuBulanan, $sertifikatKampusMerdeka) {
        // Memanggil constructor dari class induk (Karyawan)
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        
        // Properti khusus Karyawan Magang
        $this->uangSakuBulanan = $uangSakuBulanan;
        $this->sertifikatKampusMerdeka = $sertifikatKampusMerdeka;
    }

    public function hitungGajiBersih() {
        // Karyawan magang gajinya flat (hanya uang saku bulanan)
        return $this->uangSakuBulanan;
    }

    public function tampilkanProfilKaryawan() {
        $statusKampusMerdeka = $this->sertifikatKampusMerdeka ? "Ya" : "Tidak";
        
        echo "<b>[ KARYAWAN MAGANG ]</b><br>";
        echo "ID Karyawan: {$this->id_karyawan}<br>";
        echo "Nama: {$this->nama_karyawan}<br>";
        echo "Departemen: {$this->departemen}<br>";
        echo "Peserta Kampus Merdeka: {$statusKampusMerdeka}<br>";
        echo "Gaji Bersih (Uang Saku): Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br><hr>";
    }
}
?>