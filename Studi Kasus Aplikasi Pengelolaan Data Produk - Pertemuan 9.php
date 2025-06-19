<?php
// 1. Membuat class Produk
class Produk {
    public $nama;
    public $harga;
    public $stok;

    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function tampilkan() {
        return "Nama: {$this->nama}, Harga: Rp{$this->harga}, Stok: {$this->stok}";
    }
}

// 2. Menyimpan beberapa produk dalam array
$produkList = [];
$produkList[] = new Produk("Laptop", 7000000, 5);
$produkList[] = new Produk("Mouse", 100000, 15);
$produkList[] = new Produk("Keyboard", 250000, 10);
$produkList[] = new Produk("Monitor", 1500000, 3);

// 3. Menampilkan semua produk
echo "=== Semua Produk ===\n";
foreach ($produkList as $produk) {
    echo $produk->tampilkan() . "\n";
}

// 4. Mencari produk berdasarkan harga tertentu (misal: di bawah Rp1.000.000)
$hargaMaks = 1000000;
echo "\n=== Produk dengan harga di bawah Rp{$hargaMaks} ===\n";
foreach ($produkList as $produk) {
    if ($produk->harga < $hargaMaks) {
        echo $produk->tampilkan() . "\n";
    }
}
?>