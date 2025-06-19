<?php
namespace Models;

class Mahasiswa
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function tampilkanNama()
    {
        return "Nama Mahasiswa: " . $this->nama;
    }
}