<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\AutoController;
use App\Http\Controllers\EdadesController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SuperheroeController;
use App\Models\Libro;
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


Route::get('/');
Route::get('/Edades',[EdadesController::class, 'edades']);
Route::get('/Articulos', [ArticulosController::class, 'articulos']);
Route::get('/Productos', [ProductosController::class, 'productos']); 