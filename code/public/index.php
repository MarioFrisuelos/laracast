<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use App\App;

echo "Hello World!";
echo "<hr>";
echo (new App())->run();
