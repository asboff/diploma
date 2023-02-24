<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function __invoke(){
        $pageName = "Главная";
        $topProperties = Property::query()->limit(3)->orderBy('price')->get();
        $latestProperties = Property::query()->limit(6)->latest()->get();
        return view('site.index', compact('pageName', 'topProperties', 'latestProperties'));
    }
}
