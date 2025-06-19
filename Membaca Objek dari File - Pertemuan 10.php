<?php
$data = file_get_contents("mahasiswa.txt");
$mhs_baca = unserialize($data);

echo "Nama: " . $mhs_baca->nama . "\n";
echo "Umur: " . $mhs_baca->umur . "\n";
?>