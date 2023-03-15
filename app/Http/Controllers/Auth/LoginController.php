<?php

namespace App\Http\Controllers\Auth;

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

    // @if ()
    //  // Statements inside body of if
    // @else
    //  //Statements inside body of else
    // @endif
    protected $redirectTo = 'dashboard';

    // if( $user->roles() == "admin") {// do your magic here
    //     return redirect()->route('dashboard');
    // }else{

    // }
    
    //  return redirect('/home');

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function authenticated()
    // {
    //     if (Auth::user()->roles = 'admin') { // check if user is admin
    //         return redirect()->route('dashboard'); // redirect to admin dashboard
    //     } else {
    //         return redirect()->intended($this->redirectTo); // redirect to default location
    //     }
    // }
}
