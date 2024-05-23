<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userliste;
use Illuminate\Contracts\Session\Session;

class DuluController extends Controller
{
    protected $hidden =['created_at','updated_at',];
    public function login(){
        return view('.login');
    }

    //page d'inscription

    public function registration(Request $request){
        $request->validate([
            'new_user_nom' => 'required',
            'new_user_prenom'  => 'required',
            'new_user_email'  => 'required',
            'new_user_telephone'  => 'required',
        ]);

        $user = new userliste();
        $user->NOM = "$request->new_user_nom";
        $user->PARENT_ID = "$request->parent_id";
        $user->PRENOM = "$request->new_user_prenom";
        $user->EMAIL = "$request->new_user_email";
        $user->TELEPHONE = $request->new_user_telephone;
        $user->STATUT = "EN ATTENTE";

        $user->updated_at = now();
        $user->created_at  = now();

        $user->save();


        session(['user_name'=>$user->NOM]);
        session(['user_id'=>$user->id]);

        return redirect('/accueil');

    }


    // page invitation
    public function invitations(){
        
        $query =  userliste::where('PARENT_ID', session('user_id'));
            
        $rows = $query->get();
        return view('.invitations',compact('rows'));
    }

    public function arbre(){
        
        $query =  userliste::where('PARENT_ID', session('user_id'));
            
        $rows = $query->get();
        return view('.arbre',compact('rows'));
    }


    public function logout(){
        session()->invalidate();
        session()->regenerateToken();
        return redirect('https://www.google.com');
    }
    public function parametres(){
        $user = userliste::find(session('user_id'));
        return view('parametres',compact('user'));
        
    }

    public function update(Request $request){
        
        $request->validate([
            'nom' => 'required',
            'prenom'  => 'required',
            'email'  => 'required',
            'number'  => 'required',

        ]);

        $user = userliste::find(session('user_id'));
        $user->NOM = "$request->nom";
        $user->PRENOM = "$request->prenom";
        $user->EMAIL = "$request->email";
        $user->TELEPHONE = $request->number;
        $user->update();

        session(['user_name'=>$user->NOM]);
        session(['user_id'=>$user->id]);

        return redirect('/accueil');
        
    }
}