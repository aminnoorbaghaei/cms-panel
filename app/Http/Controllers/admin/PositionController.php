<?php

namespace App\Http\Controllers\admin;

use App\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PositionController extends Controller
{
    public function insertPosition(Request $request)
    {


        

        $position = Position::create([

            'user_id' => auth()->user()->id,
            'lang_id' => $request->lang,
            'parent' => $request->parentPos,
            "status" => ($request->status == "on") ? "1" : "0",
            'order' => $request->order,
            'name' => $request->name,
            'level' => "0",

        ]);
        if(!$position){
            toastr()->error('اطلاعات شما ثبت نشد');

        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("partners.create"));


        }
    }
    public function ListPosition($lang){
        
        return Position::ListParent(Position::SpaceName(),$lang);
        
    }
    
}
