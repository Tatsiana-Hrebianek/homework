<?php

use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Server("127.0.0.1", 9501);

//Таймер при старте сервера
$server->on("start", function (Server $server) {
    echo "Сервер запущен: http://127.0.0.1:9501\n";

    //Асинхронный таймер: каждую 5-ю секунду выполняем callback
    Swoole\Timer::tick(5000, function(){
        echo " Таймер сработал: " . date('Y-m-d H:i:s') . "\n";
    });
});

//Обработка HTTP-запросов
$server->on("request", function(Request $request, Response $response) {
    $response->header("Content-Type", "text/plain; charset=utf-8");
    $response->end("Привет от Swoole!");
});

$server->start();