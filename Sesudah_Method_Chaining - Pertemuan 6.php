<?php
class Mobil {
    public $kecepatan = 0;
    public $bahanBakar = 100;

    public function tambahKecepatan($jumlah) {
        $this->kecepatan += $jumlah;
        echo "Kecepatan: " . $this->kecepatan . " km/jam\n";
        return $this;
    }

    public function kurangiKecepatan($jumlah) {
        $this->kecepatan -= $jumlah;
        echo "Kecepatan: " . $this->kecepatan . " km/jam\n";
        return $this;
    }

    public function isiBahanBakar($jumlah) {
        $this->bahanBakar += $jumlah;
        echo "Bahan Bakar: " . $this->bahanBakar . " liter\n";
        return $this;
    }
}

$mobil = new Mobil();
$mobil->tambahKecepatan(20)
      ->kurangiKecepatan(5)
      ->isiBahanBakar(10);
?>