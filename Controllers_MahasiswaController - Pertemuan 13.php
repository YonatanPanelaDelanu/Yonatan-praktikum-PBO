<?php

namespace Controllers;

use Models\Mahasiswa;

class MahasiswaController
{
    public function proses()
    {
        $mhs = new Mahasiswa("Rommi");
        echo $mhs->tampilkanNama();
    }
}
