<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\MessageRepositoryInterface;
use App\Services\MessageService;
use Illuminate\Http\Request;
use App\Http\Requests\MessageStoreRequest;

class MessageController extends Controller
{

    public $messageRepository;
    public $messageService;

    public function __construct(MessageRepositoryInterface $messageRepository, MessageService $messageService)
    {
        $this->messageRepository = $messageRepository;
        $this->messageService = $messageService;
    }

    public function sendMessage(MessageStoreRequest $request){

        $this->messageService->sendMessage($request);
        return back()->with('success', 'Your message sent');
    }

    public function getMessage(){
        $getMessages = $this->messageRepository->getAll();
        return view('admin.getMessage', compact('getMessages'));
    }

    public function deletetMessage($id)
    {

        $this->messageService->deletetMessage($id);

        return redirect()->route('admin.getMessage')->with('success', 'Delete done');
    }
}
