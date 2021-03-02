<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use HelloWorld\SayHello;
use HelloWorld\Api;

echo SayHello::world();
echo Api::call();