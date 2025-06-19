<?php
class Mahasiswa {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;

    }
}

// Array of objects
$mahasiswaList= [];
$mahasiswaList[] = new Mahasiswa("Rina");
$mahasiswaList[] = new Mahasiswa("Budi");

foreach ($mahasiswaList as $mhs) {
    echo $mhs->nama . "\n";
}
?>