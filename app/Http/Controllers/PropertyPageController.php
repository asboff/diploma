<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyPageController extends Controller
{
    public function __invoke($property){
        $property = Property::find($property);
        $pageName = "Аренда";
        return view('site.property', compact('pageName', 'property'));
    }
}
