<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Api;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class BotController extends Controller
{
    public function __construct(){
        $this->telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
    }

    public function sendMessage($id){
        return $this->telegram->sendMessage([
            'chat_id' => $id, 
            'text' => 'Hello World'
        ]);
    }

    public function messages(){
        return $this->telegram->getUpdates();
    }

    public function setWebhook(){
        $this->telegram->setWebhook([
            'url' => 'https://3aed-118-99-111-136.ap.ngrok.io/telegram/get-webhook/' . env('TELEGRAM_BOT_TOKEN')
        ]);
        return ['message' => 'Set webhook telebot is already'];
    }

    public function webhook($token, Request $request){
        $userId     =  $request['message']['from']['id'];
        $firstname  =  $request['message']['from']['first_name'];
        $lastname   =  $request['message']['from']['last_name'];
        $this->telegram->sendMessage([
            'chat_id' => $userId,
            'text' => 'Hello, ' . $firstname . ' '. $lastname . PHP_EOL . 'What can I do for you ? :)'
        ]);
        Storage::disk('local')->put('logs.txt', json_encode($request->all(), JSON_PRETTY_PRINT));
    }
}
