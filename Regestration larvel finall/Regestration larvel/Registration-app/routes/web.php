<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ApiController;
use app\Http\Controllers\MailController;
use app\Http\Controllers\LangController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\userForm_Controller::class,'index']);
Route::post('index', [App\Http\Controllers\userForm_Controller::class,'store'])->name('store');
Route::post('/', [App\Http\Controllers\userForm_Controller::class,'index'])->name('index');
Route::get('/api', [App\Http\Controllers\ApiController::class, 'API'])->name('api');
Route::get('/Email', [App\Http\Controllers\MailController::class, 'sendMail'])->name('Email');
Route::get('lang/{local}', function($local){
    session()->put('locale', $local);
    return redirect()->back();
})->name('changeLang');