<?php
class Produk {
    public $nama;

    public function __contruct($nama) {
        $this->nama = $nama;
    }

    public function tampilkanProduk() {
        return "Nama Produk: " . $this->nama;
    }
}

$produk = new Produk ("Laptop");
echo $produk->tampilkanProduk(); // Output: Nama Produk: Laptop
echo $produk->nama; // Output: Laptop
?>