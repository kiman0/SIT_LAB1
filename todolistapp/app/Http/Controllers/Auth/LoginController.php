<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
   //Перенаправдение при выходе из аккаунта
    protected $redirectAfterLogout  = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*ПЕРЕНАПРАВЛЕНИЕ НА ЛОГИН*/
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        //return '/home';
        // protected $redirectAfterLogout  = RouteServiceProvider::HOME;
    }
/*
    public function logout(Request $request) {
        Auth::login();
        $request->session()->invalidate();
       // return redirect('/login');
    }*/
}