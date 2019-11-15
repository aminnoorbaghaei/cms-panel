<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public  function index(){

        $data=SetInformationLangFront("en",$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code='en';
        $position='ltr';

       
        return view("client.index",compact('trans','code','position'));
        
        
    }
}
