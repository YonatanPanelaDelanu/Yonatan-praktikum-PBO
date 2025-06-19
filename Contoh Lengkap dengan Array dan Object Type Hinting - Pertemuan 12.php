<?php
class Produk {
    public function __construct(
        public string $nama,
        public int $harga
    ) {}
}

class Keranjang {
    /**
     * @param Produk[] $daftarProduk
     */
    public function hitungTotal(array $daftarProduk): int {
        $total = 0;
        foreach ($daftarProduk as $produk) {
            $total += $produk->harga;
        }
        return $total;
    }
}

$keranjang = new Keranjang();
$total = $keranjang->hitungTotal([
    new Produk("Buku", 50000),
    new Produk("Pulpen", 10000),
]);

echo "Total: Rp $total";
?>