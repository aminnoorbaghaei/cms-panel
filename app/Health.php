<?php

namespace App;

use App\Http\General\GeneralMethod;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    use Sluggable,GeneralMethod;
    
    protected $fillable=['user_id','lang_id','name','parent','status','keyword','description','slug','order','level'];

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

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
