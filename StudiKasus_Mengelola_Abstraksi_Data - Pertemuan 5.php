<?php
interface Transportasi {
    public function bergerak();
}

abstract class Kendaraan implements Transportasi {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    abstract public function bergerak();
}

class Mobil extends Kendaraan {
    public function bergerak() {
        echo $this->nama . " bergerak di jalan raya.\n";
    }
}

class Pesawat extends Kendaraan {
    public function bergerak() {
        echo $this->nama . " terbang di udara.\n";
    }
}

$mobil = new Mobil("Toyota");
$mobil->bergerak(); // Output: Toyota bergerak di jalan raya.

$pesawat = new Pesawat("Boeing 737");
$pesawat->bergerak(); // Output: Boeing 737 terbang di udara.
?>