<?php 
class Mobil
{
    public $merk = 'Toyota';
    public $tipe = 'Fortuner';
    public $tahun = '2016';
    public $warna = 'Putih';

}

$mobil = new Mobil();
echo "Mobil : $mobil->merk <br>";
echo "Model : $mobil->tipe <br>";
echo "Tahun : $mobil->tahun <br>";
echo "Warna : $mobil->warna ";

?>