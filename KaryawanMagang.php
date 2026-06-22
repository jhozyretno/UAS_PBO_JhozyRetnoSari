<?php
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    // Properti khusus Karyawan Magang
    protected $uangSakuBulanan;
    protected $sertifikatKampusMerdeka;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $uangSakuBulanan, $sertifikatKampusMerdeka) {
        // Pewarisan: Memanggil constructor milik induk
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        
        $this->uangSakuBulanan = $uangSakuBulanan;
        $this->sertifikatKampusMerdeka = $sertifikatKampusMerdeka;
    }

    // polimorfisme
    public function hitungGajiBersih() {
        // Logika: Menerima potongan 20% (dikali 0.80) untuk biaya pelatihan/asuransi
        $totalGajiKotor = $this->hariKerjaMasuk * $this->gajiDasarPerHari;
        return $totalGajiKotor * 0.80;
    }

    public function tampilkanProfilKaryawan() {
        echo "<b>[ KARYAWAN MAGANG ]</b><br>";
        echo "Nama: {$this->nama_karyawan}<br>";
        echo "Departemen: {$this->departemen}<br>";
        echo "Gaji Bersih (Setelah Potongan 20%): Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br><hr>";
    }
}
?>