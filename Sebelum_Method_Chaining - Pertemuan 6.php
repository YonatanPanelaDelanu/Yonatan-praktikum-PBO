<?php
class Mobil {
    public $kecepatan = 0;
    public $bahanBakar = 100;

    public function tambahKecepatan($jumlah) {
        $this->kecepatan += $jumlah;
        echo "Kecepatan: " . $this->kecepatan . " km/jam\n";
    }

    public function kurangiKecepatan($jumlah) {
        $this->kecepatan -= $jumlah;
        echo "Kecepatan: " . $this->kecepatan . " km/jam\n";
    }

    public function isiBahanBakar($jumlah) {
        $this->bahanBakar += $jumlah;
        echo "Bahan Bakar: " . $this->bahanBakar . " liter\n";
    }
}

$mobil = new Mobil();
$mobil->tambahKecepatan(20);
$mobil->kurangiKecepatan(5);
$mobil->isiBahanBakar(10);
?>