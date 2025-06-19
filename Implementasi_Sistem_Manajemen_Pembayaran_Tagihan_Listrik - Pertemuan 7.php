<?php
// Interface: untuk mencetak laporan
interface Laporan
{
    public function cetakDetail($showAdmin = false);
}

// Abstract Class: Pelanggan
abstract class Pelanggan implements Laporan
{
    protected $id;
    protected $nama;
    protected $jumlah_kwh;

    public function __construct($id, $nama)
    {
        $this->id = $id;
        $this->nama = $nama;
    }

    // Method Chaining
    public function setJumlahKwh($jumlah_kwh)
    {
        $this->jumlah_kwh = $jumlah_kwh;
        return $this;
    }

    abstract public function hitungTagihan();
}

// Subclass: Pelanggan Rumah Tangga
class PelangganRumahTangga extends Pelanggan
{
    private $tarifPerKwh = 1450; // Supaya hasil akhirnya Rp150.000
    private $adminFee = 5000;

    public function hitungTagihan()
    {
        return ($this->jumlah_kwh * $this->tarifPerKwh) + $this->adminFee;
    }

    public function cetakDetail($showAdmin = false)
    {
        echo "Pelanggan Rumah Tangga: {$this->nama}, Tagihan: Rp" . number_format($this->hitungTagihan()) . "\n";
    }
}

// Subclass: Pelanggan Bisnis
class PelangganBisnis extends Pelanggan
{
    private $tarifPerKwh = 2500; // Supaya hasil akhirnya Rp550.000
    private $adminFee = 50000; // 50.000 admin sesuai soal

    public function hitungTagihan()
    {
        return ($this->jumlah_kwh * $this->tarifPerKwh) + $this->adminFee;
    }

    public function cetakDetail($showAdmin = false)
    {
        echo "Pelanggan Bisnis: {$this->nama}, Tagihan: Rp" . number_format($this->hitungTagihan()) . "\n";
        if ($showAdmin) {
            echo "Nama: {$this->nama}, Tagihan: Rp" . number_format($this->hitungTagihan()) . " (termasuk biaya admin Rp" . number_format($this->adminFee) . ")\n";
        }
    }
}

// Fungsi Polimorfisme & Dynamic Binding
function prosesLaporanTagihan(Pelanggan $pelanggan)
{
    $pelanggan->cetakDetail(); // Dynamic binding
}

// ------------------ Testing Program ------------------

// Membuat objek
$pelanggan1 = new PelangganRumahTangga("P001", "Rina");
$pelanggan2 = new PelangganBisnis("P002", "Toko ABC");

// Method Chaining
$pelanggan1->setJumlahKwh(100); // 100 * 1450 + 5000 = 150.000
$pelanggan2->setJumlahKwh(200); // 200 * 2500 + 50000 = 550.000

// Cetak laporan dengan fungsi polimorfisme
prosesLaporanTagihan($pelanggan1);
prosesLaporanTagihan($pelanggan2);

// Simulasi overloading
$pelanggan2->cetakDetail(true);
?>