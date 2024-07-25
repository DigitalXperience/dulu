<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use App\Http\Controllers\DuluController;
use App\Http\Controllers\TwilioSMSController;
use App\Mail\sendMail;

Route::get('/send-email', function () {
    $details = [
        'title' => 'Test Email',
        'body' => 'This is a test email sent from your Laravel application.'
    ];

    Mail::to('loeelodie@gmail.com')->send(new sendMail($details));
    return 'Email sent!';
});

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



//home page index
Route::get('/', function () {
    return view('.index');
});


//page to create account
Route::post('/login',[DuluController::class,'login']);

//page to verify the code that have been send
Route::get('/verification', function () {
    return view('.verifiecode');
});

//page to wait the confirmation
Route::get('/enattente', function () {
    return view('.enattente');
});


//page to login as admin
Route::get('/admin',function () {
    return view('admin.login');
});

//page to login as member
Route::get('/log',function () {
    return view('.log');
});


//registraion operation
Route::post('/login/registration', [DuluController::class,'registration']);

//login code that is send after an account have been created verifications operations
Route::post('/verifyCode', [DuluController::class,'verificationCode']);

//login as member verifications operations
Route::post('/log/verification', [DuluController::class,'verification']);

//login as admin verifications operations
Route::post('/admin/verification', [DuluController::class,'verificationAdmin']);




///Routes about the member pages
Route::get('/accueil',[DuluController::class,'accueil']);
Route::get('/commander', [DuluController::class,'commander']);
Route::get('/mescommandes', [DuluController::class,'mescommandes']);
Route::get('/commandesChild', [DuluController::class,'commandesChild']);

Route::get('/invitations', [DuluController::class,'invitations']);
Route::get('/arbre', [DuluController::class,'arbre']);
Route::get('/parametres', [DuluController::class,'parametres']);
Route::post('/parametres/action', [DuluController::class,'update']);





//to save the user's command
Route::post('/commande/saveHaut', [DuluController::class,'commandeSave']);




//Routes for registration operations
/* Route::get('/registration/verification', [DuluController::class, 'registrationVerification']);
Route::post('/registration/verification/action', [DuluController::class,'registrationverificationaction']); */


//// Routes for the admin pages
Route::get('/admin/accueil',function () {
    return view('admin.accueil');
});
Route::get('/admin/invitations',[DuluController::class,'invitationsListe']);
Route::get('/admin/active/{id}',[DuluController::class,'invitationsAccepte']);
Route::get('/admin/refuser/{id}',[DuluController::class,'invitationsRefuser']);

Route::get('/admin/commandes',[DuluController::class,'commandesListe']);
Route::get('/admin/nextCommande/{id}',[DuluController::class,'nextCommande']);
Route::get('/admin/stopCommande/{id}',[DuluController::class,'stopCommande']);
Route::get('/admin/arbre', [DuluController::class,'arbreAdmin']);

// Route::get('/sendMail',[Mail::to]);


//Route lo logout
Route::get('/logout', [DuluController::class,'logout']);