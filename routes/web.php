<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuluController;
use App\Http\Controllers\TwilioSMSController;


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
// Route::get('/users', [dulucontroller::class, 'listeUser']);

Route::get('/', function () {
    return view('.index');
});
Route::post('/login',function () {
    return view('.login');
});
Route::get('/login/registration', [DuluController::class,'registration']);
Route::get('/accueil',function () {
    return view('.accueil');
});

Route::get('/logout', [DuluController::class,'logout']);
Route::get('/invitations', [DuluController::class,'invitations']);
Route::get('/arbre', [DuluController::class,'arbre']);
Route::get('/parametres', [DuluController::class,'parametres']);
Route::post('/parametres/action', [DuluController::class,'update']);
Route::get('/sendSMS', [DuluController::class, 'sendSMS']);

