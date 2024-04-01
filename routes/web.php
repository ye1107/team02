<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\KeysController;
use App\Http\Controllers\UsernamesController;
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
Route::middleware(['auth'])->group(function () {
Route::get('/',function(){
    return redirect('records');
});
// 顯示所有鑰匙借用紀錄
Route::get('records',[RecordsController::class,'index'])->name('records.index');
// 顯示單一鑰匙借用紀錄資料
Route::get('records/{id}', [RecordsController::class,'show'])->where('id', '[0-9]+')->name('records.show');
// 修改單一鑰匙借用紀錄表單
Route::get('records/{id}/edit', [RecordsController::class,'edit'])->where('id', '[0-9]+')->name('records.edit');
// 刪除單一鑰匙借用紀錄資料
Route::delete('records/delete/{id}',[RecordsController::class,'destroy'])->where('id', '[0-9]+')->name('records.destroy')->middleware('can:admin');
// 新增鑰匙借用紀錄表單
Route::get('records/create', [RecordsController::class, 'create'])->name('records.create')->middleware('can:admin');
// 修改鑰匙借用紀錄資料
Route::patch('records/update/{id}', [RecordsController::class, 'update'])->where('id', '[0-9]+')->name('records.update');
// 儲存鑰匙借用紀錄資料
Route::post('records/store', [RecordsController::class, 'store'])->where('id', '[0-9]+')->name('records.store')->middleware('can:admin');
//2023年借用查詢
Route::get('records/borrow',[RecordsController::class,'borrow'])->name('records.borrow');
//選定鑰匙查詢借用者
Route::get('records/kid', [RecordsController::class, 'kid'])->name('records.kid');

// 顯示所有鑰匙編號和地點
Route::get('keys',[KeysController::class,'index'])->name('keys.index');
// 顯示單一鑰匙編號和地點資料
Route::get('keys/{id}', [KeysController::class,'show'])->where('id', '[0-9]+')->name('keys.show');
// 修改單一鑰匙編號和地點表單
Route::get('keys/{id}/edit', [KeysController::class,'edit'])->where('id', '[0-9]+')->name('keys.edit');
// 刪除單一鑰匙編號和地點資料
Route::delete('keys/delete/{id}',[KeysController::class,'destroy'])->where('id', '[0-9]+')->name('keys.destroy')->middleware('can:admin');
// 新增鑰匙編號和地點表單
Route::get('keys/create', [KeysController::class, 'create'])->name('keys.create')->middleware('can:admin');
// 修改鑰匙編號和地點資料
Route::patch('keys/update/{id}', [KeysController::class, 'update'])->where('id', '[0-9]+')->name('keys.update');
// 儲存鑰匙編號和地點資料
Route::post('keys/store', [KeysController::class, 'store'])->where('id', '[0-9]+')->name('keys.store')->middleware('can:admin');

//顯示所有教職員生
Route::get('usernames',[UsernamesController::class,'index'])->name('usernames.index');
// 顯示單一教職員生資料
Route::get('usernames/{id}', [UsernamesController::class,'show'])->where('id', '[0-9]+')->name('usernames.show');
// 修改單一教職員生表單
Route::get('usernames/{id}/edit', [UsernamesController::class,'edit'])->where('id', '[0-9]+')->name('usernames.edit');
// 刪除單一教職員生資料
Route::delete('usernames/delete/{id}',[UsernamesController::class,'destroy'])->where('id', '[0-9]+')->name('usernames.destroy')->middleware('can:admin');
// 新增教職員生表單
Route::get('usernames/create', [UsernamesController::class, 'create'])->name('usernames.create')->middleware('can:admin');
// 修改教職員生資料
Route::patch('usernames/update/{id}', [UsernamesController::class, 'update'])->where('id', '[0-9]+')->name('usernames.update');
// 儲存教職員生資料
Route::post('usernames/store', [UsernamesController::class, 'store'])->where('id', '[0-9]+')->name('usernames.store')->middleware('can:admin');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

