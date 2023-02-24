<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(){
        $pageName = "Контакты";
        return view('site.contact', compact('pageName'));
    }
}
