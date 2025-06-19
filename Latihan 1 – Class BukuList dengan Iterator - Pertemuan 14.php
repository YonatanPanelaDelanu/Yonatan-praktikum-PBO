<?php
class BukuList implements Iterator {
    private $buku = [];
    private $index = 0;

    public function __construct(array $buku) {
        $this->buku = $buku;
    }

    public function current() {
        return $this->buku[$this->index];
    }

    public function key() {
        return $this->index;
    }

    public function next() {
        ++$this->index;
    }

    public function rewind() {
        $this->index = 0;
    }

    public function valid() {
        return isset($this->buku[$this->index]);
    }
}

// Contoh penggunaan
$daftarBuku = new BukuList(["PHP Dasar", "OOP dengan PHP", "Laravel untuk Pemula"]);

foreach ($daftarBuku as $key => $judul) {
    echo "Buku ke-$key: $judul" . PHP_EOL;
}
?>