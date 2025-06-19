<?php
class Mobil
{
    public $merk = 'Toyota';
    public $tipe = 'Fortuner';
    public $tahun = '2016';
    public $warna = 'Putih';

    public function maju() {
        echo 'Brooooommmm...';
    }
}

$mobil = new Mobil ();

//Mengatur nilai property
$mobil->merk = 'suzuki';
$mobil->tipe = 'Ertiga';
$mobil->tahun = '2014';
$mobil->warna = 'abu-abu';

//mencetak nilai property
echo "Mobil : $mobil->merk <br>";
echo "Model : $mobil->tipe <br>";
echo "Tahun : $mobil->tahun <br>";
echo "Warna : $mobil->warna <br>";

//Menjalankan method maju()
$mobil->maju();

?>