<?php

require __DIR__ .'/../vendor/autoload.php';

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host' => '127.0.0.1',
    'port' => 6379,
]);

$queueKey = 'myqueue';

$task = json_encode([
    'id' => uniqid(),
    'message' => 'Hello from producer',
    'created_at' => date('Y-m-d H:i:s')
]);

//Добавляем задачу в конец списка (очередь)
$client->rpush($queueKey, $task);

echo "Task added to queue: $task\n";