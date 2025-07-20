<?php

require __DIR__ .'/../vendor/autoload.php';

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => '127.0.0.1',
    'port'   => 6379,
]);

$queueKey = 'myqueue';

echo "Waiting for tasks...\n";

while (true) {
    //Блокирующее ожидание задачи из начала очереди, таймаут 5 секунд
    $task = $client->blpop([$queueKey], 5);

    if ($task) {
        // $task — массив [ключ, значение], значение — задача
        $taskData = json_decode($task[1], true);

        echo "Processing task ID: {$taskData['id']}, message: {$taskData ['message']}\n";

        // Симуляция обработки
        sleep(1);

        echo "Task prcessed.\n";
    }else {
        echo "No tasks. Waiting...\n";
    }
}