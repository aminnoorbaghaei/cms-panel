<?php

namespace App\Http\Controllers\admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function show()
    {

        return view('admin.website.show');


    }
    public function update(Request $request)
    {
         Setting::find(1)->update([
             'title'=>$request->title,
             'description'=>$request->description,
             'address'=>$request->address,
             'email'=>$request->email,
             'phone'=>$request->phone,


         ]);;


        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('website.information.show'));



    }
}
