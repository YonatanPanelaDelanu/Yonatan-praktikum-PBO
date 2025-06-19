<?php
class Kendaraan {
    public $merk;
    public $tahun;

    public function __construct($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function info() {
        return "Merk: $this->merk, Tahun: $this->tahun";
    }
}

// Child class mewarisi dari Parent class
class Mobil extends Kendaraan {
    public $jumlahPintu;

    public function __construct($merk, $tahun, $jumlahPintu) {
        parent::__construct($merk, $tahun); // Memanggil constructor parent class
        $this->jumlahPintu = $jumlahPintu;
    
}
public function infoMobil() {
    return parent::info() . ", Jumlah Pintu: $this->jumlahPintu";
}
}

$mobil1 = new Mobil("Toyota", 2022, 4);
echo $mobil1->infoMobil();
?>