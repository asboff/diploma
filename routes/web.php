<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SiteController;
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

Route::get('/', SiteController::class)->name('index');
Route::get('/about', AboutController::class)->name('about');

//Route::get('/admin', function () {
//    return view('admin.index');
//});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index', [
            'pageName' => "Главная",
        ]);
    })->name('admin.index');
    Route::resource('categories',CategoryController::class)->except(['show']);
    Route::resource('users', UserController::class);
});
