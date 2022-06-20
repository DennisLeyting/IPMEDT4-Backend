<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActiviteitController;
use App\Http\Controllers\CheckpointController;
use App\Http\Controllers\GebruikerController;
use App\Http\Controllers\MoeilijkheidsgraadController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\SoortenactiviteitenController;


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


Route::post('/create_checkpoint', 'App\Http\Controllers\CheckpointController@addCheckpoint');
Route::post('/create_route', 'App\Http\Controllers\RoutesController@addRoute');
Route::get('/activiteit', [ActiviteitController::class, 'index']);
Route::get('/gebruiker', [GebruikerController::class, 'index']);
Route::get('/routes', [RoutesController::class, 'index']);
Route::get('/checkpoints', [CheckpointController::class, 'index']);
Route::get('/sa', [SoortenactiviteitenController::class, 'index']);

Route::get('/{any}', function ($any) {

    return [1,2,3,4,5,6,7,8,9,10,11];

});