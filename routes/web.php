<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'telegram'], function(){
    Route::get('messages', 'BotController@messages');
    Route::get('message/{id}', 'BotController@sendMessage');
    Route::get('set-webhook', 'BotController@setWebhook');
    Route::post('get-webhook/{token}', 'BotController@webhook');
});
