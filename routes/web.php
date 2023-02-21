<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\morphController;

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

Route::resource('/area', AreaController::class)->middleware('auth');

Route::resource('/block', BlockController::class)->middleware('auth');

Route::resource('/student', StudentController::class)->middleware('auth');

Route::post('/fetchblocks',[StudentController::class,'fetchBlocks']);

Route::get('/post',[morphController::class,'show_post']);

Route::get('/image',[morphController::class,'show_image']);


Route::get('/', function () {
    return view('landing');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
