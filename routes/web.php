<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\KeysController;
use App\Http\Controllers\UsernamesController;
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

Route::get('records',[RecordsController::class,'index'])->name('records.index');
Route::get('keys',[KeysController::class,'index'])->name('keys.index');
Route::get('usernames',[UsernamesController::class,'index'])->name('usernames.index');
