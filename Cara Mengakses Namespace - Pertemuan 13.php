<?php
require 'User.php';

use App\Models\User;

$user = new User();
echo $user->info();
?>