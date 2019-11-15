<?php

namespace App\Http\Controllers\admin;

use App\Health;
use App\Specialty;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpecialtyController extends Controller
{
  

   public  function loadSpecialty($lang){

      $specialty= Specialty::ListParent(Specialty::SpaceName(),$lang);
      $health= Health::ListParent(Health::SpaceName(),$lang);
      
      $data=[
         
         "specialty"=>$specialty,
         "health"=>$health
      ];

      return response()->json($data);
   }
   public function insertSpecialtyDoctor(Request $request)
   {
      $requests=[
          'user_id'=>auth()->user()->id,
          'lang_id'=>$request->langSpe,
          'parent'=>$request->parentSpe,
          "status"=>($request->status=="on") ? "1":"0",
          'order'=>$request->order,
          'name'=>$request->name,
          'level'=>"0",
      ];
      return Specialty::CreateRecord(Specialty::SpaceName(),$requests,$request,"doctors.create",true,"parentSpe");

   }


}
