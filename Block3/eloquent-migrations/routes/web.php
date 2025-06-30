<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\LogMessageJob;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-queue', function() {
    LogMessageJob::dispatch('Привет из очереди!');
    return 'Job отправлен!';
});
