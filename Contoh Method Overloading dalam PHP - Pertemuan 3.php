<?php
class Matematika {
    public function __call($name, $arguments) {
        if ($name == 'tambah') {
            switch (count($arguments)) {
                case 2: return $arguments[0] + $arguments[1];
                case 3: return $arguments[0] + $arguments[1] + $arguments[2];
                default: return "Jumlah parameter tidak didukung";
            }
        }
    }
}

$hitung = new Matematika();
echo $hitung->tambah(3, 4). "<br>"; // Output: 7
echo $hitung->tambah(2, 3, 5); // Output: 10
?>