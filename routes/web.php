<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\prestamoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/prestamo/list', [prestamoController::class, 'index']);
Route::post('/prestamo', [prestamoController::class,'store']);
Route::get('/prestamo/{id}', [prestamoController::class,'show']);
Route::put('/prestamo/{id}', [prestamoController::class, 'update']);
Route::delete('/prestamo/{id}', [prestamoController::class, 'destroy']);
Route::get('/prestamo/{id}/edit', [prestamoController::class, 'edit']);
Route::get('/prestamo/create', [prestamoController::class, 'create']);
