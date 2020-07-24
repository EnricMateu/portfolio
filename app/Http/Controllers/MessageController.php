<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $msg= request()->validate([
        'name'=> 'required',
        'email'=> 'required|email',
        'subject'=> 'required',
        'content'=> 'required|min:3'
        ]);

        Mail::to('xaxeu@hotmail.com')->queue(new MessageReceived($msg));

        return back()->with('status', 'Recibimos su mensaje, le responderemos asap');
    }
}
