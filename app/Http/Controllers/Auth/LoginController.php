<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //
    // affichage du formulaire login
    //
    public function index(){
        return view('pages.login.index');
    }
    
    //
    // tentative de connection
    //
    public function loginPost(Request $request){
        
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        //
        // on authentifie avec seulement si actif
        //
         if (Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password, 
            'actif' => true
        ])) {
            // Authentication passed...
            
            return redirect()->intended('home');
        }

        //return view('login.index', ['wrongPassMail' => true]);
        //
        // on renvoit à la page login avec le message d'alerte 
        //
        return view('pages.login.index')->with('wrongPassMail' , true);
    }
}
