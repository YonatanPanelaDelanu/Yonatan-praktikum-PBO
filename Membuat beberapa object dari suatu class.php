<?php class Mobil
{
    public $merk = '';
    public $tipe = '';
    
    public function maju () {
        echo 'brooooommmmm...<br>';
    }
}

$mobil1 = new Mobil ();
$mobil1->merk = 'Suzuki';
$mobil1->tipe = 'Ertiga';


echo $mobil1->merk . " " . $mobil1->tipe . " " . $mobil1->maju()."<br>";


$mobil2 = new Mobil();
$mobil2->merk = 'Ford';
$mobil2->tipe = 'Mustang';


echo $mobil2->merk . " " . $mobil2->tipe . " " . $mobil2->maju();
?>