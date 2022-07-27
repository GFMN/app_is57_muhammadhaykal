<?php

use App\Http\Controllers\menucontroller;
use App\Http\Controllers\pembeliancontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('layouts.master');
// });

Auth::routes();
Route::get('/menu', [menucontroller::class, 'index']);
Route::get('/menu/form', [menucontroller::class, 'create']);
Route::post('/menu/store', [menucontroller::class, 'store']);
Route::get('/pembelian', [pembeliancontroller::class, 'index']);
Route::get('/pembelian/form', [pembeliancontroller::class, 'create']);
Route::post('/pembelian/store', [pembeliancontroller::class, 'store']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
