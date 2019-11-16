<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    | redirecting them to your template screen. The controller uses a General
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

   
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin/panel';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
          $this->middleware('guest')->except(['logout','adminLogout']);
    }
    public function adminLogout()
    {
        Auth::guard('web')->logout();

        return redirect('/');
    }
}
