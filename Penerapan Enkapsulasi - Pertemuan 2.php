<?php
class BankAccount {
    private $pemilik;
    private $saldo;
    
    // konstruktor untuk inisialisasi akun
    public function __construct($pemilik, $saldoAwal) {
        $this->pemilik = $pemilik;
        $this->saldo = $saldoAwal;
    }

    // Metode untuk menambah saldo
    public function deposit($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Deposit berhasil! Saldo saat ini: Rp" . number_format($this->saldo, 2) . "<br>";
        } else {
            echo "jumlah deposit harus lebih dari Rp 0!<br>";
        }
    
    }
    // Metode untuk menarik saldo
    public function withdraw($jumlah) {
        if ($jumlah > $this->saldo) {
            echo "Gagal! Saldo tidak mencukupi.<br>";
        } elseif ($jumlah <= 0) {
            echo "Jumlah penarikan harus lebih dari Rp 0!<br>";
        } else {
            $this ->saldo -= $jumlah;
            echo "Penarikan berhasil! Saldo saat ini : Rp " . number_format($this->saldo, 2) . "<br>";
        }
    }

    // Metode untuk mendapatkan saldo saat ini
    public function getSaldo() {
        return "Saldo saat ini untuk " . $this->pemilik . ": Rp " . number_format($this->saldo, 2) . "<br>";
    }
}

// Membuat objek akun bank
$akun1 = new BankAccount("Budi Santoso", 5000000);

// Menampilkan saldo awal
echo $akun1->getSaldo();

//Melakukan deposit
$akun1->deposit(2000000);

// Melakukan penarikan
$akun1->withdraw(3000000);
$akun1->withdraw(5000000); // Ini akan gagal karena saldo tidak cukup

// Menampilkan saldo setelah transaksi
echo $akun1->getSaldo();

// Akses langsung ke saldo akan error karena saldo bersifat private
// echo $akun1->saldo; // ERROR: Cannot access private property
?>