<?php

declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($class) {
    $paths = ['../Controllers', '../Models', '../Services', '../Views'];
    foreach ($paths as $path) {
        $file = "$path/$class.php";
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

require_once '../routes/web.php';

