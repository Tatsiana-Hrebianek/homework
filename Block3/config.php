<?php
$env = parse_ini_file(__DIR__ . '/.env');
define('DB_DSN', "mysql:host={$env['DB_HOST']};dbname={$env['DB_NAME']};charset=utf8mb4");
define('DB_USER', 'tatsiana');
define('DB_PASSWORD', '');

?>