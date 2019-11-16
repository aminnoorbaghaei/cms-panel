<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientLoginController extends Controller
{


    public function __construct()
    {

        $this->middleware('guest:client')->except('logout');
    }

    public function showLoginForm()
    {
        $data=SetInformationLangFront(get_segment(1),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];

        return view('auth.client.login',compact('code','position','trans'));
    }
    public  function login(Request $request){



        $this->validate($request,[
           'email'=>'required|email',
            'password'=>'required|min:6'

        ]);

        if(Auth::guard('client')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            return redirect()->intended(route('client.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','password'));
    }
    public function logout()
    {
        Auth::guard('client')->logout();

        return redirect('/');
    }
}
