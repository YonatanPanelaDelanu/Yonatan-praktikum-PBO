<?php
class Mahasiswa {
    public $nama;
    public $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }
}

// Membuat objek
$mhs = new Mahasiswa("Andi", 20);

// Serialisasi objek dan simpan ke file
$data = serialize($mhs);
file_put_contents("mahasiswa.txt", $data);

echo "Objek telah disimpan ke file.\n";
?>