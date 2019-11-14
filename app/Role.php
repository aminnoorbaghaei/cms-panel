<?php

namespace App;

use App\Http\General\GeneralMethod;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use GeneralMethod;
   protected $fillable=["lang_id",'name','label','parent','level','model_type'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public  static function AddArray( $list,$result){


        $res = array_slice($list[0], 0, 3, true) +
            array("childlist"=>$result) +
            array_slice($list[0], 3, count($list[0]) - 1, true) ;


        return $res;


    }



    public static function ListParent($model,$lang){

        $nav=[];

        $items=$model::latest()->whereLang_id($lang)->whereParent("0")->get();

        if(!is_null($items)) {

            foreach ($items as $key=>$value) {



                $list=array(json_decode($value,true));



                $child=$model::latest()->whereLang_id($lang)->whereParent($value->id)->get();

                $result=[];

                foreach ($child as $index=>$item) {


                    $result=array_merge($result,array(json_decode($item,true)));


                }
                array_push($nav,self::AddArray($list,$result));





            }
        }
        else {
            return null;
        }





        return $nav;





    }

}
