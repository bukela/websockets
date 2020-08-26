<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{


    public function createMessage(Request $request)
    {
        $message = [];
        $message['body'] = 'bodddyyyy';
        $message['receiver_id'] = '111';

        broadcast(new MessageSent($message))->toOthers();
    }
}
