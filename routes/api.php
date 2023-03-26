<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DropdownDepartmenController;
use App\Http\Controllers\DropdownUserController;
use App\Http\Controllers\InboxController;
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

Route::get("jajal", function () {
    return response('test');
});

Route::group(['prefix' => "auth"], function () {
    Route::post('login', [AuthController::class, 'login'])->name('login');
});
Route::group(['prefix' => "dropdown"], function () {
    Route::resource('user', DropdownUserController::class);
    Route::resource('department', DropdownDepartmenController::class);
});

Route::resource('inbox', InboxController::class);
