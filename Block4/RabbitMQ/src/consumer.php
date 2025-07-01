<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;

$connection = new AMQPStreamConnection(
    'localhost',
    5672,
    'guest',
    'guest'
);

$channel = $connection->channel();

// Объявляем очередь (на всякий случай — должна совпадать с producer)
$channel->queue_declare(
    'task_queue',
    false,
    false,
    false,
    false
);

echo " [*] Waiting for messages. To exit press CTRL+C\n";

// Callback — что делать с полученным сообщением
$callback = function ($msg) {
    $text = date('Y-m-d H:i:s') . " Received: " . $msg->body . "\n";
    echo $text;

    // Пишем в лог-файл
    file_put_contents(__DIR__ . '/queue.log', $text, FILE_APPEND);

    // Симулируем обработку (опционально)
    sleep(1);

    echo " [x] Done\n";

    // Подтверждаем, что обработали
    $msg->ack();
};

// Скажем RabbitMQ не отправлять больше одного сообщения за раз (очередь fair dispatch)
$channel->basic_qos(null, 1, null);

// Подписываемся
$channel->basic_consume(
    'task_queue',
    '',
    false,
    false,
    false,
    false,
    $callback
);

// Запускаем цикл ожидания
while ($channel->is_consuming()) {
    $channel->wait();
}

$channel->close();
$connection->close();