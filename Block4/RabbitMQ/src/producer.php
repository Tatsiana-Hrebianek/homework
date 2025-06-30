<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

// Подключение к RabbitMQ
$connection = new AMQPStreamConnection(
    'localhost', // Хост
    5672,        // Порт
    'guest',     // Пользователь
    'guest'      // Пароль
);

$channel = $connection->channel();

// Объявляем очередь (если ещё не создана)
$channel->queue_declare(
    'task_queue', // имя очереди
    false,        // passive
    true,         // durable (сохранится после перезапуска RabbitMQ)
    false,        // exclusive
    false         // auto-delete
);

// Текст сообщения
$data = implode(' ', array_slice($argv, 1));
if (empty($data)) {
    $data = "Hello World!";
}

$msg = new AMQPMessage(
    $data,
    ['delivery_mode' => AMQPMessage::DELIVERY_MODE_PERSISTENT] // Сделать сообщение персистентным
);

$channel->basic_publish($msg, '', 'task_queue');

echo " [x] Sent '$data'\n";

$channel->close();
$connection->close();