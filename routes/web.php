<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GachaMachineController;
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

Route::get('/',[GachaMachineController::class,'index'])->name('top');

Route::get('/gachamachine/{id?}/{capsule_id?}',[GachaMachineController::class,'show']);
Route::post('gachamachine',[GachaMachineController::class,'turn']);

