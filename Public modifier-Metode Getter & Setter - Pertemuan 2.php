<?php
class Mahasiswa {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter untuk membaca nilai
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk mengubah nilai
    public function setNama($nama) {
        $this->nama = $nama;
    }
}

$mhs = new Mahasiswa("Budi");
echo $mhs->getNama(); //Output: Budi
$mhs->setNama("Andi");
echo $mhs->getNama(); // Output: Andi
   