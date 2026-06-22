<?php
require_once 'Karyawan.php';

class KaryawanTetap extends Karyawan {
    protected $tunjanganKesehatan;
    protected $opsiSahamId;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $tunjanganKesehatan, $opsiSahamId) {
        // Memanggil constructor dari class induk (Karyawan)
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        
        // Properti khusus Karyawan Tetap
        $this->tunjanganKesehatan = $tunjanganKesehatan;
        $this->opsiSahamId = $opsiSahamId;
    }

    public function hitungGajiBersih() {
        // (Hari kerja x Gaji harian) + Tunjangan Kesehatan
        return ($this->hariKerjaMasuk * $this->gajiDasarPerHari) + $this->tunjanganKesehatan;
    }

    public function tampilkanProfilKaryawan() {
        echo "<b>[ KARYAWAN TETAP ]</b><br>";
        echo "ID Karyawan: {$this->id_karyawan}<br>";
        echo "Nama: {$this->nama_karyawan}<br>";
        echo "Departemen: {$this->departemen}<br>";
        echo "ID Opsi Saham: {$this->opsiSahamId}<br>";
        echo "Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br><hr>";
    }
}
?>