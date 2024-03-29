<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    //mengovereading fungsi login
    public function login(Request $request)
    {
        $input = $request->all();
 
        if(auth()->attempt(array('username'=>$input['username'], 'password'=> $input['password'], 'status' => 1)))
        {
            $request->session()->regenerate();
 
            if (auth()->user()->role_id == 1){
                return redirect()->route('karyawan.dashboard');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')->with('email','Email-Address And Password are Wrong.');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

}
