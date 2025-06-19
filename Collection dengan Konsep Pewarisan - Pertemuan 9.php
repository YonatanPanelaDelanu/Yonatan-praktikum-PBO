<?php
abstract class Pegawai {
    abstract function info();
}

class Dosen extends Pegawai {
    function info() {
        return "Saya dosen.";
    }
}

class staf extends Pegawai {
    function info () {
        return "Saya staf.";
    }
}

$pegawai = [new Dosen(), new Staf()];
foreach ($pegawai as $p) {
    echo $p->info() . "\n";
}
?>