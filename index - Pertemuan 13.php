<?php
require 'Models/Mahasiswa.php';
require 'Controllers/MahasiswaController.php';

use Controllers\MahasiswaController;

$controller = new MahasiswaController();
$controller->proses();