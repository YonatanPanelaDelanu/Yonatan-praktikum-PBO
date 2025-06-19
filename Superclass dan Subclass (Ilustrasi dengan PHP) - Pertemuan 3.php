<?php
class Hewan {
    public $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function bersuara() {
        return "Hewan ini bersuara";
    }
}

class Kucing extends Hewan {
    public function bersuara() {
        return "Meong!";
    }
}

$kucing = new Kucing("Kitty");
echo $kucing->bersuara(); // Output: Meong!
?>