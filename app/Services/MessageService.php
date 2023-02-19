<?php
namespace App\Services;

use App\Models\Message;

class MessageService
{
    public function sendMessage($request){

        return \App\Models\Message::create($request->all());
    }

    public function deletetMessage($id)
    {
        return \App\Models\Message::find($id)->delete();
    }
}
