<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userliste;

class DuluController extends Controller
{
    protected $hidden =['created_at','updated_at',];
    public function login(){
        return view('.login');
    }
    public function registration(Request $request){
        $request->validate([
            'new_user_nom' => 'required',
            'new_user_prenom'  => 'required',
            'new_user_email'  => 'required',
            'new_user_telephone'  => 'required',
        ]);

        $user = new userliste();
        $user->NOM = "'$request->new_user_nom'";
        $user->PRENOM = "'$request->new_user_prenom'";
        $user->EMAIL = "'$request->new_user_email'";
        $user->TELEPHONE = $request->new_user_telephone;
        $user->updated_at = now();
        $user->created_at  = now();

        $user->save();

        return redirect('/accueil');

    }
}