<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userliste;
use App\Models\User;
use App\Models\commande;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendMail;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Exception;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Hash;


class DuluController extends Controller
{
    //function to show the login page
    public function login(Request $request){
        if($request->input('parent_id') == ''){
            return redirect('/');
        }
        return view('.login');
    }

//function to create an account to web site
    public function registration(Request $request){
        $request->validate([
            'new_user_nom' => 'required|unique:userlistes,NOM',
            'new_user_prenom'  => 'required|unique:userlistes,PRENOM',
            'new_user_email'  => 'required|unique:userlistes,EMAIL',
            'new_user_telephone'  => 'required|unique:userlistes,TELEPHONE',
        ]);

        $existingEmail = userliste::where('EMAIL',$request->new_user_email)->count();
        if($existingEmail > 0){
            return redirect('/login')->with('status','Existing email');
        }

        $user = new userliste();
        $user->NOM = $request->new_user_nom;
        $user->PARENT_ID = $request->parent_id;
        $user->PRENOM = $request->new_user_prenom;
        $user->EMAIL = $request->new_user_email;
        $user->TELEPHONE = $request->new_user_telephone;
        $user->STATUT = "EN ATTENTE";
        $user->updated_at = now();
        $user->created_at  = now();
        $code = $this->generateRandomString();
        $user->password = $code;
        $message = $user->PRENOM.' '.$user->PRENOM.' your verification code and password is '.$code;
        $this->sendSMS($user->TELEPHONE, $message);
        $subject = 'DULU : Nouveau memebre';
        $content = 'Un nouveau membre s\'est ajouté a DULU';
        $details = [
            'title' => $subject,
            'body' => $content
        ];
        Mail::to('ngapoucheludger@gmail.com')->send(new sendMail($details));
        $user->save();
        session(['verification_code'=>$code]);
        return redirect('/verification');

    }

    public function password(){
        return view('password');
    }
    

    public function newpassword(Request $request){
        $request->validate([
            'number' => 'required',
        ]);
        $user = userliste::where("TELEPHONE",$request->input('number'))->first();
        if($user){
            $code = $this->generateRandomString();
            $user->password = $code;
            $message = 'Votre mote de passe est: '.$code.' vous pouvez le modifier dans parametre';
            $this->sendSMS($request->input('number'), $message);
            $user->update();
            return redirect('/log');
        }else{
            return redirect('/password')->with('status','Numero invalide'); 
        }
    }
    //function to login as member
    public function verification(Request $request){
        $user = userliste::where("EMAIL",$request->input('user_nom'))->first();
        if($user){
            $verification = userliste::where("EMAIL",$request->input('user_nom'))->where("password",$request->input('password'));
            $admin = $verification->first();
            if($admin){
                if($admin->STATUT == 'ACCEPTÉ'){
                session(['user_parent_id'=>$admin->PARENT_ID]);
                session(['user_telephone_number'=>$admin->TELEPHONE]);
                session(['user_email'=>$admin->EMAIL]);
                session(['user_name'=>$admin->NOM]);
                session(['user_id'=>$admin->id]);
                return redirect('/accueil');
                }else{
                    return redirect('/log')->with('status','Access denied'); 
                }
            }else{
                return redirect('/log')->with('status','Invalide password');

            }
        }else{
            return redirect('/log')->with('status','User not existing');
        }
    }

    //function to login as Admin

    public function verificationAdmin(Request $request){
        $user = User::where("name",$request->input('user_nom'))->get();
        if($user){
            $user = User::where("name",$request->input('user_nom'))->where("password",$request->input('password'));
            $admin = $user->first(); 
            if($admin){
                session(['user_name'=>$admin->name]);
                session(['user_id'=>$admin->id]);
                return redirect('/admin/accueil');
            }else{
                return redirect('/admin')->with('status','Invalide password');
            }
        }else{
            return redirect('/admin')->with('status','User not existing');
        }
    }



    public function verificationCode(Request $request){
        $code = $request->input('ucode');
        if($code == session('verification_code')){
            return redirect('/enattente');
        }else{
            return redirect('/verification')->with('status','Wrong code');

        }

    }

    /////mamber pages and OPerations

    //member home page 
    public function accueil(){
        if(!(session()->has('user_id'))){
            return redirect('/');
        }
        $selectedRows = commande::where('USER_ID', session('user_id'))->count();
        $dilivadRows = commande::where('USER_ID', session('user_id'))->where('DILIVARY_STATUS', '3')->count();
        $openRows = commande::where('USER_ID', session('user_id'))->where('DILIVARY_STATUS', '1')->count();
        // Assuming you have a 'users' table and a 'posts' table
        $userCommande = DB::table('commandes')
                     ->join('userlistes', 'commandes.USER_ID', '=', 'userlistes.id')
                     ->select('commandes.*', 'userlistes.NOM')
                     ->where('commandes.USER_ID',session('user_id'))
                     ->orderByDesc('created_at')
                     ->first();
        $childCommande = DB::table('commandes')
                     ->join('userlistes', 'commandes.USER_ID', '=', 'userlistes.id')
                     ->select('commandes.*', 'userlistes.NOM')
                     ->where('commandes.PARENT_ID',session('user_id'))
                     ->where('commandes.PARENT_ID','!=',session('user_id'))
                     ->orderByDesc('created_at')
                     ->first();
        return view('.accueil',compact('selectedRows','userCommande','childCommande','openRows','dilivadRows'));
    }


    // function to show the diffrente invitation made by a user
    public function invitations(){
        if(session('user_id')==''){
            return redirect('/');
        }
        $query =  userliste::orderBy("created_at","DESC")->where('PARENT_ID', session('user_id'));
            
        $rows = $query->get();
        return view('.invitations',compact('rows'));
    }

    //function to show the diffrente children of a user
    public function arbre(){
        if(!(session()->has('user_id'))){
            return redirect('/');
        }
        $query =  userliste::where('PARENT_ID', session('user_id'));
            
        $rows = $query->get();
        return view('.arbre',compact('rows'));
    }
    public function mescommandes(){
        if(!(session()->has('user_id'))){
            return redirect('/');
        }
        $request = commande::orderBy("created_at","DESC")->where('USER_ID',session('user_id'));
        $commande = $request->get();
        return view('.mescommandes',compact('commande'));

    }

    public function commandesChild(){
        if(!(session()->has('user_id'))){
            return redirect('/');
        }
        $request = commande::join('userlistes', 'commandes.PARENT_ID', '=', 'userlistes.id')
        ->select('commandes.*','userlistes.NOM')
        ->where('USER_ID',session('user_id'))
        ->where('commandes.PARENT_ID','!=',session('user_id'))
        ->orderByDesc('created_at');
        $commande = $request->get();
        return view('.commandesChild',compact('commande'));

    }

    //function to show the page where the user can buy products
    public function commander(){
        if(!(session()->has('user_id'))){
            return redirect('/');
        }
        return view('.commander');
    }

     //saving commande
     public function commandeSave(Request $request){
        $request->validate([
            'telephone' => 'required',
            'number'  => 'required',
        ]);
        $parent=userliste::where('id',session('user_parent_id'))->first();
        $user = new commande();
        $user->PARENT_ID = session('user_parent_id');
        $user->USER_ID = session('user_id');
        $user->PRODUCT_NAME = $request->product_name;
        $user->PRODUCT_QUANTITY = $request->number;
        $user->USER_TELEPHONE = $request->telephone;
        $user->PRODUCT_PRICE = $request->total;
        $user->DILIVARY_STATUS = "1";
        $user->updated_at = now();
        $user->created_at  = now();
        $user->CREATION_DATE = now();
        $subject = 'DULU : Nouvelle commande';
        $content = 'Votre filleul '.session('user_name').' a fais une commande merci pour votre confiance';
        $details = [
            'title' => $subject,
            'body' => $content
        ];
        // Mail::to($parent->EMAIL)->send(new sendMail($details));
        $user->save();
        return redirect('/commander');
    }

    //function to  open the page where the user can make changes about his page
    public function parametres(){
        if(session('user_id')==''){
            return redirect('/');
        }
        $user = userliste::find(session('user_id'));
        return view('parametres',compact('user'));
        
    }

    //function to update user's informations
    public function update(Request $request){
        if(session('user_id')==''){
            return redirect('/');
        }
        $request->validate([
            'nom' => 'required',
            'prenom'  => 'required',
            'email'  => 'required',
            'number'  => 'required',
            'mdp'  => 'required',


        ]);
        $user = userliste::find(session('user_id'));
        $user->NOM = "$request->nom";
        $user->PRENOM = "$request->prenom";
        $user->EMAIL = "$request->email";
        $user->TELEPHONE = $request->number;
        $user->password = "$request->mdp";

        $user->update();

        session(['user_name'=>$user->NOM]);
        session(['user_id'=>$user->id]);

        return redirect('/accueil');
        
    }



    /////Admin pages and OPerations
    //function to show the diffrent invitations made by the users of the web site to the admin


    public function indexAdmin(){
        $not_paid = 0;
        $paid = 0;
        $gain_shirt = 4000;
        $gain_pad = 1000;
        $commandes_encours = commande::where('DILIVARY_STATUS','!=', '3')->where('DILIVARY_STATUS','!=', '0')->count();
        $commandes = commande::count();
        $commandes_fees = commande::where('created_at', '<=', Carbon::now()->subDays(15))->get();
        $commandes_fees_paid = commande::where('created_at', '>', Carbon::now()->subDays(15))->get();
        foreach($commandes_fees_paid as $commande){
            if($commande->PRODUCT_NAME == "T-SHIRT"){
                $total = $commande->PRODUCT_QUANTITY *$gain_shirt;
                $paid += $total;

            }
            if($commande->PRODUCT_NAME == "PAD"){
                $total = $commande->PRODUCT_QUANTITY * $gain_pad;
                $paid  += $total;
            }
        }
        foreach($commandes_fees as $commande){
            if($commande->PRODUCT_NAME == "T-SHIRT"){
                $total = $commande->PRODUCT_QUANTITY *$gain_shirt;
                $not_paid += $total;
            }
            if($commande->PRODUCT_NAME == "PAD"){
                $total = $commande->PRODUCT_QUANTITY * $gain_pad;
                $not_paid += $total;
            }
        }
        return view('admin.accueil',compact('commandes_encours','commandes','paid','not_paid'));
    }
    public function invitationsListe(){
        if(!(session()->has('user_id'))){
            return redirect('/');
        }
        $rows = userliste::orderBy("created_at","DESC")->paginate(10);
        return view('admin.invitations',compact('rows'));
    }

    public function arbreAdmin(){
        if(!(session()->has('user_id'))){
            return redirect('/');
        }
        $query =  userliste::where('PARENT_ID', session('user_id'));          
        $rows = $query->get();
        return view('admin.arbre',compact('rows'));
    }
    //function to update users status accepte
    public function invitationsAccepte($id){
        if(session('user_id')==''){
            return redirect('/admin');
        }
        $rows = userliste::find($id);
        $rows ->STATUT = 'ACCEPTE';
         $subject = 'DULU : Demande';
        $content = 'Votre demande a ete accepte.vous pouvez maintenant vous login quand vous voulez ';
        
        $details = [
            'title' => $subject,
            'body' => $content
        ];
        Mail::to($rows->EMAIL)->send(new sendMail($details));
        $rows->update();
        return redirect('/admin/invitations')->with('status','User Activated');

    }
    //function to update users status refuse

    public function invitationsRefuser($id){
        if(session('user_id')==''){
            return redirect('/admin');
        }
        $rows = userliste::find($id);
        $rows ->STATUT = 'REFUSE';
        $subject = 'DULU : Demande';
        $content = 'Votre demande a été Refusé.Apres l\'etude de vote demande nous avons le regret de le rejeter';
        $details = [
            'title' => $subject,
            'body' => $content
        ];
        Mail::to($rows->EMAIL)->send(new sendMail($details));
        $rows->update();
        return redirect('/admin/invitations')->with('status','User Updated');

    }


   //function to show the diffrent commandes made by the users of the web site to the admin
   public function commandesListe(){
    if(!(session()->has('user_id'))){
        return redirect('/admin');
    }
    $commandes = commande::join('userlistes', 'commandes.USER_ID', '=', 'userlistes.id')
                 ->select('commandes.*', 'userlistes.NOM')
                 ->orderByDesc('created_at')
                 ->get();
    return view('admin.commandes',compact('commandes'));
}
    ///change the situation of the divary
    public function nextCommande($id){
        if(session('user_id')==''){
            return redirect('/admin');
        }
        $rows = commande::find($id);
        $rows ->DILIVARY_STATUS	 +=1 ;
        $rows->update();
        return redirect('/admin/commandes')->with('status','Command Updated');

    }

    ///Cancel the situation of the divary
    public function stopCommande($id){
        if(session('user_id')==''){
            return redirect('/admin');
        }
        $rows = commande::find($id);
        $rows ->DILIVARY_STATUS	 = 0 ;
        $rows->update();
        return redirect('/admin/commandes')->with('status','Command Updated');

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
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 5; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


     //function to log out
     public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}