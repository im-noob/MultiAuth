<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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

    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 2:
                $this->redirectTo = '/admin2';
                return $this->redirectTo;
                break;
            case 4:
                $this->redirectTo = '/admin4';
                return $this->redirectTo;
                break;
            case 3:
                $this->redirectTo = '/admin3';
                return $this->redirectTo;
                break;
            case 5:
                $this->redirectTo = '/admin5';
                return $this->redirectTo;
                break;
            case 6:
                $this->redirectTo = '/admin6';
                return $this->redirectTo;
                break;
            case 1:
                $this->redirectTo = '/admin1';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }

        // return $next($request);
    }

    //    public function __construct()
//    {
//        $this->middleware('guest')->except('logout');
//    }
}
