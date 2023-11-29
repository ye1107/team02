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
Route::get('/',function(){
    return redirect('records');
});
// 顯示所有鑰匙借用紀錄
Route::get('records',[RecordsController::class,'index'])->name('records.index');
// 顯示單一鑰匙借用紀錄資料
Route::get('records/{id}', [RecordsController::class,'show'])->where('id', '[0-9]+')->name('records.show');
// 修改單一鑰匙借用紀錄表單
Route::get('records/{id}/edit', [RecordsController::class,'edit'])->where('id', '[0-9]+')->name('records.edit');

// 顯示所有鑰匙編號和地點
Route::get('keys',[KeysController::class,'index'])->name('keys.index');
// 顯示單一鑰匙編號和地點資料
Route::get('keys/{id}', [RecordsController::class,'show'])->where('id', '[0-9]+')->name('keys.show');
// 修改單一鑰匙編號和地點表單
Route::get('keys/{id}/edit', [RecordsController::class,'edit'])->where('id', '[0-9]+')->name('keys.edit');

//顯示所有教職員生
Route::get('usernames',[UsernamesController::class,'index'])->name('usernames.index');
// 顯示單一教職員生資料
Route::get('usernames/{id}', [UsernamesController::class,'show'])->where('id', '[0-9]+')->name('usernames.show');
// 修改單一教職員生表單
Route::get('usernames/{id}/edit', [UsernamesController::class,'edit'])->where('id', '[0-9]+')->name('usernames.edit');
