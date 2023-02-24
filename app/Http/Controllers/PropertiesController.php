<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function __invoke(){
        $pageName = "Аренда";
        $properties = Property::query()->latest()->paginate(6);
        return view('site.properties', compact('pageName', 'properties'));
    }
}
