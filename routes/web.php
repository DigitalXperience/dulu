<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DuluController;
use App\Http\Controllers\TwilioSMSController;
use App\Mail;


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
Route::get('/log',function () {
    return view('.log');
});
Route::get('/login/registration', [DuluController::class,'registration']);
Route::post('/log/verification', [DuluController::class,'verification']);

Route::get('/accueil',[DuluController::class,'accueil']);

Route::get('/logout', [DuluController::class,'logout']);

Route::get('/commander', [DuluController::class,'commander']);
Route::get('/mescommandes', [DuluController::class,'mescommandes']);

Route::get('/invitations', [DuluController::class,'invitations']);
Route::get('/arbre', [DuluController::class,'arbre']);
Route::get('/parametres', [DuluController::class,'parametres']);
Route::post('/parametres/action', [DuluController::class,'update']);
Route::get('/registration/verification', [DuluController::class, 'registrationVerification']);
Route::post('/registration/verification/action', [DuluController::class,'registrationverificationaction']);

Route::post('/commande/saveHaut', [DuluController::class,'commandesaveHaut']);



Route::get('/admin/accueil',function () {
    return view('admin.accueil');
});

Route::get('/admin/invitations',[DuluController::class,'invitationsListe']);
Route::get('/admin/active/{id}',[DuluController::class,'invitationsAccepte']);
Route::get('/admin/commandes',[DuluController::class,'commandesListe']);
// Route::get('/sendMail',[Mail::to]);
