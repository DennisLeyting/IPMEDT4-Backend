<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\http\Controllers\ActiviteitController;
use App\http\Controllers\CheckpointsController;
use App\http\Controllers\GebruikerController;
use App\http\Controllers\MoeilijkheidsgraadController;
use App\http\Controllers\RoutesController;
use App\http\Controllers\SoortenactiviteitController;


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




Route::get('/{any}', function ($any) {

    return [1,2,3,4,5,6,7,8,9,10,11];

});