<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('/smsforupdate', App\Http\Controllers\ReceiveSmsController::class);
//Route::post('/smsforupdate', [App\Http\Controllers\SmsAllController::class, 'smsForUpdate']);
//Route::get('smsforall', [App\Http\Controllers\SmsAllController::class, 'SmsForAll']);
Route::post('receive', [App\Http\Controllers\ReceiveController::class, 'receive']);



