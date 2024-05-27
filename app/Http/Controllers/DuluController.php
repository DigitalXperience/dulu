<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userliste;
use App\Models\User;

use Illuminate\Contracts\Session\Session;
use Exception;
use Twilio\Rest\Client;

class DuluController extends Controller
{
    //function to show the login page
    public function login(){
        return view('.login');
    }

    //function to login
    public function verification(Request $request){
        $user = User::where("name",$request->input('user_nom'))->where("password",$request->input('password'));
        $admin = $user->first();
        session(['user_name'=>$admin->name]);
        session(['user_id'=>$admin->id]);

        return redirect('/admin/accueil');
    }



    public function verificationlogin(Request $request){
        $user = userliste::where("NOM",$request->input('user_nom'))->where("password",$request->input('password'));
        $admin = $user->first();
        session(['user_name'=>$admin->NOM]);
        session(['user_id'=>$admin->id]);

        return redirect('/accueil');
    }


    //function to register to web site
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


        $code = $this->generateRandomString();
        $user->password = $code;
        $message = 'hey '.$user->PRENOM.' your verification code and password is '.$code;

        $this->sendSMS($user->TELEPHONE, $message); 

        $user->save();

        session(['verification_code'=>$code]);
        session(['user_name'=>$user->NOM]);
        session(['user_id'=>$user->id]);

        return redirect('/registration/verification');

    }

    public function registrationVerification(){
        return view('.registrationVerification');
    }

    public function registrationverificationaction(Request $request){
        $request->validate([
            'code_verification' => 'required',
        ]);
        if($request->code_verification == session('verification_code')){
            return redirect('/accueil');
        }else{
            return view('.registrationVerification')->with('status','Wrong validation code');
        }

    }

    // function to show the diffrente invitation made by a user
    public function invitations(){
        
        $query =  userliste::where('PARENT_ID', session('user_id'));
            
        $rows = $query->get();
        return view('.invitations',compact('rows'));
    }

    //function to show the diffrente children of a user
    public function arbre(){
        
        $query =  userliste::where('PARENT_ID', session('user_id'));
            
        $rows = $query->get();
        return view('.arbre',compact('rows'));
    }


    //function to show the page where the user can buy products
    public function commander(){
        return view('.commander');
    }

    //function to log out
    public function logout(){
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }


    //function to  open the page where the user can make changes about his page
    public function parametres(){
        $user = userliste::find(session('user_id'));
        return view('parametres',compact('user'));
        
    }

    //function to update user's informations
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

    //function to show the diffrent invitations made by the users of the web site to the admin
    public function invitationsListe(){
        $rows = userliste::get();
        return view('admin.invitations',compact('rows'));
    }

    //function to update users status
    public function invitationsAccepte($id){
        $rows = userliste::find($id);
        $rows ->STATUT = 'ACCEPTE';
        $rows->update();
        return redirect('/admin/invitations')->with('status','User Activated');

    }

    // fonction pour envoyer un SMS
    public function sendSMS($phone, $message) {
        // Paramètres de l'API de SMS
        $login = "699124249";
        $password2 = "as!69@81";
        $sender_id = "Top";
        $ext_id = "0123456";
        $programmation = "0";
        $message = 'Top ' . $message;
        // Construire l'URL de l'API
        $url = "https://sms.etech-keys.com/ss/api.php?";
        $url .= "login=" . urlencode($login);
        $url .= "&password=" . urlencode($password2);
        $url .= "&sender_id=" . urlencode($sender_id);
        $url .= "&destinataire=" . urlencode($phone);
        $url .= "&message=" . urlencode($message);
        $url .= "&ext_id=" . urlencode($ext_id);
        $url .= "&programmation=" . urlencode($programmation);

        $response = file_get_contents($url);
        return $response;
    }


    // function to generate random string of 4 characters only containing numbers from 0 to 9
    public function generateRandomString() {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 4; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
/*     public function sendSMS()
    {
        $receiverNumber = "+237659747733";
        $message = "hello world c'est ludger";
  
        try {
  
            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");
  
            $client = new Client($account_sid, $auth_token);
            $client->messages->create($receiverNumber, [
                'from' => $twilio_number, 
                'body' => $message]);
  
            dd('SMS Sent Successfully.');

            
  
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }
        return redirect('/accueil');
    }
 */}