<?php

require_once __DIR__ . '/vendor/autoload.php';

use React\Http\Browser;
use Psr\Http\Message\ResponseInterface;
use React\EventLoop\Factory;

$loop = Factory::create();
$browser = new Browser($loop);

$browser->get('https://jsonplaceholder.typicode.com/posts/1')
->then(function(ResponseInterface $response) {
    echo $response->getBody();
});

$browser->get('https://api.github.com/')->then(
    function(ResponseInterface $response) {
        echo $response->getBody();
    }
);

echo "Запрос отправлен, ждем ответа";

$loop->run();