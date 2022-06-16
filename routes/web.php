<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthenticatedSessionController::class,'create']);


Route::middleware('auth')->group(function () {
Route::get ('message/sended', [MessageController::class, 'enviados'])->name('messages.sended');
Route::get ('message/recieved', [MessageController::class, 'recibidos'])->name('messages.recieved');
Route::resource ('message', MessageController::class);
});

require __DIR__.'/auth.php';
