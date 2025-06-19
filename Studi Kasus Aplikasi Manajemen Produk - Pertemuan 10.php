<?php
class Produk {
    public $nama, $harga, $stok;

    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }
}

$produk1 = new Produk("Laptop", 10000000, 5);
$produk2 = new Produk("Mouse", 150000, 20);

// Simpan array objek ke file
$produk_list = [$produk1, $produk2];
file_put_contents("produk.txt", serialize($produk_list));

// Baca dan tampilkan
$data = unserialize(file_get_contents("produk.txt"));
foreach ($data as $p) {
    echo "Nama: $p->nama, Harga: $p->harga, Stok: $p->stok\n";
}
?>