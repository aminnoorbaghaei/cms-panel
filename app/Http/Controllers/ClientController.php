<?php

namespace App\Http\Controllers;


use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $client=auth()->user();

        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];

        return view('client.index',compact('code','position','trans','client'));

    }
    public function profile()
    {

        $client=auth()->user();

        $data=SetInformationLang(Client::whereId(5)->first(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];

        return view('client.profile.profile',compact('code','position','trans','client'));

    }
}
