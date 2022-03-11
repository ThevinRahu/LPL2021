<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\PlayerStatController;
use App\Http\Controllers\MatchesController;

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
/*Route::get('/index', function () {
    echo "LPL";
});*/

Route::get('/index',[FirstController::class,'first']);
Route::post('/saveplayer',[PlayersController::class,'save']);
Route::post('/savematch',[MatchesController::class,'save']);
Route::get('/won1/{no}',[MatchesController::class,'won1']);
Route::get('/won2/{no}',[MatchesController::class,'won2']);
Route::get('/nr/{no}',[MatchesController::class,'nr']);
Route::get('/delete/{id}',[PlayersController::class,'delete']);
Route::post('/saveplayerstatbat',[PlayerStatController::class,'savebat']);
Route::post('/saveplayerstatbowl',[PlayerStatController::class,'savebowl']);


