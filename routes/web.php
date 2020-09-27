<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GachaMachineController;
use App\Http\Controllers\GachaCapsuleController;
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

//トップページ
Route::get('/',[GachaMachineController::class,'index'])->name('top');
//ガチャの検索
Route::get('/search',[GachaMachineController::class,'search']);

//ガチャ詳細画面
Route::get('/gachamachine/{id?}',[GachaMachineController::class,'show']);
//ガチャを回す
Route::post('/gachamachine',[GachaMachineController::class,'turn']);

//ガチャのカプセル登録画面
Route::get('/gachacapsule/{machine_id?}',[GachaCapsuleController::class,'regist']);
//カプセルの登録
Route::post('gachacapsule',[GachaCapsuleController::class,'create']);

Route::get('/delete/{id?}',[GachaCapsuleController::class,'delete']);
Route::post('/delete',[GachaCapsuleController::class,'drop']);

