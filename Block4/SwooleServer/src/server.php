<?php

use Swoole\Http\Server;
use Swoole\Http\Request;
use Swoole\Http\Response;

$server = new Server("127.0.0.1", 9501);

$server->on("request", function(Request $request, Response $response) {
    $response->header("Content-Type", "text/plain; charset=utf-8");
    $response->end("Привет от Swoole!");
});

$server->start();