<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\AtraccionController;
use App\Http\Controllers\ApiController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware('auth:api')->group(function () {
    Route::post('/comentarios', [ComentarioController::class, 'store']);
    Route::put('/atracciones/{id}', [ApiController::class, 'updateAtraccion']);
    Route::post('/comentarios', [ComentarioController::class, 'store']);
Route::get('/especies', [EspecieController::class, 'index']);
Route::get('/especies/{id}', [EspecieController::class, 'show']);
Route::get('/atracciones/comentarios/{minCalificacion}/{maxCalificacion}', [AtraccionController::class, 'obtenerComentarios']);
Route::get('/atracciones/comentarios/cantidad/{id}', [AtraccionController::class, 'cantidadComentarios']);
Route::get('/atracciones/especie/{idEspecie}', [AtraccionController::class, 'atraccionesPorEspecie']);
Route::get('/atracciones/especie/calificacion/{idEspecie}', [AtraccionController::class, 'calificacionPromedioPorEspecie']);
Route::put('/atracciones/{id}', [ApiController::class, 'updateAtraccion']);
});
