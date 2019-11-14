<?php

namespace App\Http\Controllers\admin;



use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class PanelController extends Controller
{

   
    
    function index(){

        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

       $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        
        $users=User::latest()->get();

        
        return view("admin.index",compact('trans','code','position','users'));

    }

    
}
