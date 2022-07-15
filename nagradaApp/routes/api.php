<?php

use App\Http\Controllers\AuthController;
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
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('pesme',[PesmaController::class,'index']);

Route::get('izvodjaci',[IzvodjacController::class,'index']);

Route::get('nagrade',[NagradaController::class,'index']);
Route::get('nagrade/{id}',[NagradaController::class,'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {  //ulogovani korisnici
    Route::get('/profiles', function (Request $request) { //ovo omogucava da prikazem ulogovanog korisnika
        return auth()->user();
    });

    Route::delete('pesme/{id}',[PesmaController::class,'destroy']);
    Route::put('pesme/{id}',[PesmaController::class,'update']);
    Route::post('pesme',[PesmaController::class,'store']);
    Route::post('izvodjaci',[IzvodjacController::class,'store']);

    Route::post('/logout', [AuthController::class, 'logout']);

});    






