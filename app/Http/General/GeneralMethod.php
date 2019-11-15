<?php

namespace App\Http\General;


use App\Category;

trait  GeneralMethod  {


    public static function SpaceName()
    {
        return __CLASS__;
    }
    public static function HasSet($result,$address){


        if(!$result){
            toastr()->error('اطلاعات شما ثبت نشد');

        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route($address));


        }
    }
    public  static  function CreateRequest($model,$requests){

        return $spe=$model::create($requests);

    }
    public  static function CreateRecord($model,$requests,$request,$address,$statistic=false,$nameparent=null,$media=false,$nameImage="",$cat=false,$catlist=null,$relation=false,$nameRelation=null,$item=null){

        $result=self::CreateRequest($model,$requests,$nameparent);

       if(!is_null($nameparent)){
           if($request->$nameparent!="0"){

               $parentList=find_parent($request->$nameparent,$model);

               $parentList->update([

                   "level"=>$parentList->level + 1
               ]);
           }
       }
        
        if($media){
            $result->addMedia($request->image)->toMediaCollection($nameImage);
        }
        if($statistic){
            CreateStatistic($model,$result);
        }
        if($cat && !is_null($catlist)){
            Category::create(array_merge($catlist,["model_number"=>$result->id]));
        }
        if($relation && !is_null($nameRelation) && !is_null($item)){
          $result->$nameRelation()->attach($item);
        }
        return self::HasSet($result,$address);



    }
    
}

