<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\areaController;
use App\Http\Controllers\blockController;

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

Route::resource('/area', areaController::class);


Route::resource('/block', blockController::class);

// Route::get('/block', function () {
//     return view('showBlock');
// });
// Route::get('/blocks', function () {
//     return view('insertBlock');
// });

// Route::get('/insertarea', function () {
//     return view('insertArea');
// });

// Route::get('/',[areaController::class,'index'])->name('index');

// Route::post('/insertarea',[areaController::class,'create'])->name('create_area');

// Route::get('/edit/{id}',[areaController::class,'edit'])->name('edit_area');

// Route::put('/edit/{id}',[areaController::class,'update'])->name('update_area');

// Route::get('/delete/{id}',[areaController::class,'destroy'])->name('destroy_area');


