<?php
interface Kendaraan {
    public function bergerak();
}

class Mobil implements Kendaraan {
    public function bergerak() {
        echo "Mobil bergerak di jalan raya.";
    }
}

class Pesawat implements Kendaraan {
    public function bergerak() {
        echo "Mobil bergerak di jalan raya.";
    }
}

$mobil = new Mobil();
$mobil->bergerak(); // Output: Mobil bergerak di jalan raya.

$pesawat = new Pesawat();
$pesawat ->bergerak(); // Output: Pesawat terbang di udara.
?>