<?php
$host = 'localhost';
$db   = 'db_uas_pbo_ti1c_jhozyretnosari'; 
$user = 'root';               
$pass = '';                   

// Langsung melakukan koneksi tanpa pengaturan tambahan
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);



// ABSTRACT CLASS KARYAWAN
abstract class Karyawan {
    // Properti terenkapsulasi (protected)
    protected $id_karyawan;
    protected $nama_karyawan;
    protected $departemen;
    protected $hariKerjaMasuk;
    protected $gajiDasarPerHari;

    // Constructor
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerHari) {
        $this->id_karyawan      = $id_karyawan;
        $this->nama_karyawan    = $nama_karyawan;
        $this->departemen       = $departemen;
        $this->hariKerjaMasuk   = $hariKerjaMasuk;
        $this->gajiDasarPerHari = $gajiDasarPerHari;
    }

    // Metode abstrak (tanpa isi/body)
    abstract public function hitungGajiBersih();
    abstract public function tampilkanProfilKaryawan();
}
?>