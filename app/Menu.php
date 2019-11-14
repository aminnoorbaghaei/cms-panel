<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable=["lang_id","user_id","slug","icon","hrefUrl","slug","title","status","order","level","parent"];
    public function path()
    {
        return "/menu/$this->slug";
    }
    use Sluggable;


    public static function SpaceName()
    {
        return __CLASS__;
    }


    public  static function AddArray( $list,$result){


        $res = array_slice($list[0], 0, 3, true) +
            array("childlist"=>$result) +
            array_slice($list[0], 3, count($list[0]) - 1, true) ;


        return $res;


    }




    public static function ListParent($lang){

        $nav=[];

        $items=Menu::latest()->whereLang_id($lang)->whereParent("0")->get();

        if(!is_null($items)) {

            foreach ($items as $key=>$value) {



                $list=array(json_decode($value,true));



                $child=Menu::latest()->whereLang_id($lang)->whereParent($value->id)->get();

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
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
