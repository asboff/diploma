<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admin', function () {
//    return view('admin.index');
//});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index', [
            'pageName' => "Главная",
        ]);
    });
    Route::resource('categories',CategoryController::class)->except(['show']);
});
