<?php

namespace App\Http\Controllers\admin;

use App\Option;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    public function show(){

        $options=Option::latest()->paginate(10);
        
        return view("admin.panel.panels",compact("options"));
        
    }
}
