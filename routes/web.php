<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/data-handle/{id}path', [\App\Http\Controllers\DataHandleController::class,'handlePathVariable']);
Route::get('/data-handle/query-string?firstName=Hung&lastName=Dao&email=hung@gmail.com', [\App\Http\Controllers\DataHandleController::class,'handleQueryString']);
Route::get('/data-handle/form', [\App\Http\Controllers\DataHandleController::class,'handleForm']);
Route::post('/data-handle/form', [\App\Http\Controllers\DataHandleController::class,'processForm']);
