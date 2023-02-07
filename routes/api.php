<?php

use App\Http\Controllers\Api\apiResepController;
use App\Http\Controllers\Frontend\TransactionController;
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

// resep obat
Route::get('/resepObat', [apiResepController::class, 'index']);
Route::get('/resepObat/{id}', [apiResepController::class, 'getResep']);
Route::post('resepObat', [apiResepController::class, 'store']);
Route::put('resepObat/{resepObat}', [apiResepController::class, 'update']);
Route::delete('resepObat/{resepObat}', [apiResepController::class, 'delete']);

Route::post('/midtrans-callback', [TransactionController::class, 'callback']);
