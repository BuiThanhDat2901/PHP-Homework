<?php

use App\Http\Controllers\LayoutController;
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
    return view('');
});
Route::get('/data-handle/{id}/path', [\App\Http\Controllers\DataHandleController::class,'handlePathVariable']);
Route::get('/data-handle/query-string?firstName=Hung&lastName=Dao&email=hung@gmail.com', [\App\Http\Controllers\DataHandleController::class,'handleQueryString']);
Route::get('/data-handle/form', [\App\Http\Controllers\DataHandleController::class,'handleForm']);
Route::post('/data-handle/form', [\App\Http\Controllers\DataHandleController::class,'processForm']);

Route::view('/form','admin.template.form');
Route::view('/table','admin.template.table');

Route::get('/admin/layout/home',[\App\Http\Controllers\LayoutController::class, 'getLayout']);
Route::get('/admin/layout/form',[\App\Http\Controllers\LayoutController::class, 'getForm']);
Route::get('/admin/layout/table',[\App\Http\Controllers\LayoutController::class, 'getTable']);
