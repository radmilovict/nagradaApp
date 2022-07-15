<?php

use App\Http\Controllers\IzvodjacController;
use App\Http\Controllers\NagradaController;
use App\Http\Controllers\PesmaController;
use App\Models\Nagrada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pesme',[PesmaController::class,'index']);

Route::get('izvodjaci',[IzvodjacController::class,'index']);
//Route::get('izvodjaci/{kategorijaNominacije}',[IzvodjacController::class,'show']);

Route::get('nagrade',[NagradaController::class,'index']);
Route::get('nagrade/{id}',[NagradaController::class,'show']);
