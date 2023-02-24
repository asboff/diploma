<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke(){
        $pageName = 'О нас';
        return view('site.about', compact('pageName'));
    }
}
