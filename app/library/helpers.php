<?php


use App\Cat;
use App\Category;
use App\Health;
use App\Language;
use App\Menu;
use App\Specialty;
use App\Statistic;
use App\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Schema;


function inject($type, $route) {

        return view($type.'.section.injection',compact("route"));
    }

function get_segment($segment)
{
    
    return Request::segment($segment);
    
}

function find_item($key,$value,$class)
{
    
    
    return $class::where($key,$value)->first()->id;
    
}

function hasTable_cms($table)
{
    if(Schema::hasTable($table) )
    {
        return true;
    }
    return false;
}

function Export_category($model,$lang)
{

    return Cat::latest()->whereModel_type($model)->whereLang_id($lang)->get();
    
}

function Export_cat($lang)
{


    $collection= Cat::latest()->whereLang_id($lang)->whereParent("0")->get();


    return $collection;

}


function find_parent($id,$model)
{
    
    return $model::whereId($id)->first();

}


function find_Menu($id)
{

    return Menu::whereId($id)->first();

}


function FindCat($item,$model,$name)
{


       $cat=Category::whereModel_number($item->id)->whereModel_type($model)->first();

    if(!$cat){
      return null;
    }
    else

        return FindCatName($cat,$name);

}
function FindHealth($item,$name)
{


     $health=Health::whereId($item->health_id)->first();

    if(!$health){
        return null;
    }
    else

        return FindHealthName($health,$name);

}
function FindHealthName($health,$name)
{


    return $health->$name;

}
function FindSpecialties($item,$name)
{


    $specialties=Specialty::whereId($item->specialty_id)->first();

    if(!$specialties){
        return null;
    }
    else

        return FindSpecialtiesName($specialties,$name);

}
function FindSpecialtiesName($specialties,$name)
{


    return $specialties->$name;

}



function FindCatId($item,$model)
{


    return Category::whereModel_number($item->id)->whereModel_type($model)->first()->cat_id;


}

function FindCatName($cat,$name)
{


   return Cat::whereId($cat->cat_id)->first()->$name;

}

function Model_information($model,$id,$target)
{
    
    $result=$model::whereId($id)->first()->$target;
    
    if(!$result){
        return null;
    }
    else
        return $result;
    
}



function ChangCatModel($item,$model,$catId){


    $cat=Category::whereModel_number($item->id)->whereModel_type($model)->first();
    
    $cat->update([
        
        "cat_id"=>$catId
    ]);
    
    if(!$cat){
        return null;
    }


}
function ShowStatistics($model,$item,$name){

    $result=Statistic::whereModel_type($model)->whereModel_number($item->id)->first()->$name;

    if(!$result){
        return null;
    }
    else
        return $result; 
    
}
function CreateStatistic($model,$item){

    Statistic::create([
        "model_type"=>$model,
        "model_number"=>$item->id,
        "likeCount"=>0,
        "commentCount"=>0,
        "viewCount"=>0
    ]);

}


function SetInformationLang($user,$defaultPosition,$defaultCode){
    

    $position=Language::whereId($user->lang_id)->first()->position;
    $code=Language::whereId($user->lang_id)->first()->code;

    if(empty($position)){
        return CallLang($defaultPosition,$defaultCode);
    }
    else{
        return CallLang($position,$code);
    }

    
}

function CallLang($position,$code){
    
    App::setLocale($code);
    $trans = Lang::get('admin');

    $data=[

        "position"=>$position,
        "code"=>$code,
        "trans"=>$trans

    ];
    return $data;
}

function SetInformationLangFront($code,$defaultPosition,$defaultCode){

    if(!is_null(Language::whereCode($code)->first())){
        $position=Language::whereCode($code)->first()->position;
    }
    else{
        $position=$defaultPosition;
        $code=$defaultCode;

    }


    if(empty($position)){
        return CallLang($defaultPosition,$defaultCode);
    }
    else{
        return CallLang($position,$code);
    }


}


function CallLangFront($position,$code){
    
    $trans = Lang::get('admin');

    $data=[

        "position"=>$position,
        "code"=>$code,
        "trans"=>$trans

    ];
    return $data;
}


function CheckValue($data,$cond,$value){
    
    if($data==$cond){
        return $value;
    }
    else{
        return $data;
    }
    
}

function FindFlag($id){
    
    $lang=User::whereId($id)->first()->lang_id;
    
    if(isset($lang)){
        return Language::whereId($lang)->first()->icon;
    }
    return "";
    
}

function FindLang($id){

        return Language::whereId($id)->first()->name;


}
function findString($text,$string){


    $pos=strpos($text,$string);
    $result=substr($text,$pos);
    $result=(explode("-",$result));
    return $result[count($result) - 1];

}

function CountModel($model){


    return $model::count();
    
}









