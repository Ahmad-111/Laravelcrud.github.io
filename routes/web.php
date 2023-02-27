<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\morphController;
use App\Http\Controllers\ImageController;
use App\Mail\mail_queue;
use App\Mail\mail_queue_job;
use App\Jobs\send_mail_to_user;



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

Route::get('/mail',function(){
   
   dispatch(new send_mail_to_user());
   echo"Mail sent";
});

// Route::get('/mail',function(){
   
//     Mail::to("test.user@gmail.com")
//     ->send(new mail_queue());
//     return view('send_mail');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
