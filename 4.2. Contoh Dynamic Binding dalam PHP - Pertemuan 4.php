<?php
class Pegawai {
    public function getGaji() {
        return "Gaji pegawai umum";
    }  
}

class Manager extends Pegawai {
    public function getGaji () {
        return "Gaji manager lebih besar";
    }
}

class Programmer extends Pegawai {
    public function getGaji() {
        return "Gaji programmer tergantung pengalaman";
    }
}

// Dynamic Binding
function cetakGaji(Pegawai $pegawai) {
    echo $pegawai->getGaji() . "<br>";
}

$pegawai1 = new Manager();
$pegawai2 = new Programmer();

cetakGaji($pegawai1); // Output: Gaji manager lebih besar
cetakGaji($pegawai2); // Output: Gaji programmer tergantung pengalaman
?>