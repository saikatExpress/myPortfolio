<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DictionaryController;
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

Route::controller(ContactController::class)->group(function(){
    Route::post('/contact', 'store')->name('contact');
});

Route::controller(DictionaryController::class)->group(function(){
    Route::get('/create/dictionary', 'create');
    Route::post('/word/store', 'store');
});
