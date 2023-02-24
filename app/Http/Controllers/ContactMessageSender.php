<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMessageRequest;
use App\Jobs\SendMailJob;
use App\Mail\ContactMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageSender extends Controller
{
    public function __invoke(ContactMessageRequest $request){
        Message::create($request->all());
        dispatch(new SendMailJob($request));
        return redirect(route('contact'));
    }
}
