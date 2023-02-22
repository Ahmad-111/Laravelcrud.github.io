<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\morphController;
use App\Http\Controllers\ImageController;

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

Route::get('/post',[morphController::class,'viewPost']);
Route::get('post/{id}',[morphController::class,'postId']);
Route::post('post/{posts:id}',[morphController::class,'createComment']);

Route::get('/image',[ImageController::class,'viewImage']);
Route::get('image/{id}',[ImageController::class,'imageId']);
Route::post('image/{images:id}',[ImageController::class,'createComment']);


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
