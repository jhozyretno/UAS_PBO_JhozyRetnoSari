<?php
require_once 'Karyawan.php';

class KaryawanTetap extends Karyawan {
    // Properti khusus Karyawan Tetap
    protected $tunjanganKesehatan;
    protected $opsiSahamId;

    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari, $tunjanganKesehatan, $opsiSahamId) {
        // Pewarisan: Memanggil constructor milik induk
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari);
        
        $this->tunjanganKesehatan = $tunjanganKesehatan;
        $this->opsiSahamId = $opsiSahamId;
    }

    public function hitungGajiBersih() {
    }

    public function tampilkanProfilKaryawan() {
    }
}
?>