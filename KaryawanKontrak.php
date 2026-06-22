<?php
require_once 'Karyawan.php';

class KaryawanKontrak extends Karyawan {
    protected $durasiKontrakBulan;
    protected $agensiPenyalur;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $durasiKontrakBulan, $agensiPenyalur) {
        // Memanggil constructor dari class induk (Karyawan)
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        
        // Properti khusus Karyawan Kontrak
        $this->durasiKontrakBulan = $durasiKontrakBulan;
        $this->agensiPenyalur = $agensiPenyalur;
    }

    public function hitungGajiBersih() {
        // Hanya Hari kerja x Gaji harian
        return $this->hariKerjaMasuk * $this->gajiDasarPerHari;
    }

    public function tampilkanProfilKaryawan() {
        echo "<b>[ KARYAWAN KONTRAK ]</b><br>";
        echo "ID Karyawan: {$this->id_karyawan}<br>";
        echo "Nama: {$this->nama_karyawan}<br>";
        echo "Departemen: {$this->departemen}<br>";
        echo "Agensi Penyalur: {$this->agensiPenyalur}<br>";
        echo "Durasi Kontrak: {$this->durasiKontrakBulan} Bulan<br>";
        echo "Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br><hr>";
    }
}
?>