<?php
class Kendaraan {
    protected $merk;

    public function __construct($merk) {
        $this->merk = $merk;
    }

    protected function getMerk() {
        return "Merk Kendaraan:" . $this->merk;
    }
}

class Mobil extends Kendaraan {
    public function tampilkanMerk() {
        return $this->getMerk(); // Bisa diakses karena kelas Mobil adalah turunan dari Kendaraan
    }
}

$mobil = new Mobil ("Toyota");
// echo $mobil->getMerk(); // ERROR: Cannot protected method
echo $mobil->tampilkanMerk(); // Output: Merk Kendaraan: Toyota
?>