<?php
class Orang {
    public function sapa() {
        return "Halo, saya seorang guru.";
    }
}

class Guru extends Orang {
    public function sapa() {
        return "Halo, saya seorang guru.";
    }
}

$guru = new Guru();
echo $guru->sapa(); // Output: Halo, saya seorang guru.
?>