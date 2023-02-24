<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(){
        $pageName = "Контакты";
        return view('site.contact', compact('pageName'));
    }
}
