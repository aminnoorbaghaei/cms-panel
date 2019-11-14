<?php

namespace App\Http\Controllers\admin;

use App\Article;
use App\Cat;
use App\Information;
use App\Job;
use App\Portfolio;
use App\Product;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    public  function loadCatArticle($lang)
    {
        return Cat::ListParent(Cat::SpaceName(),$lang,Article::SpaceName());
    }
    public  function loadCatProduct($lang)
    {
        return Cat::ListParent(Cat::SpaceName(),$lang,Product::SpaceName());
    }
    public  function loadCatInformation($lang)
    {
        return Cat::ListParent(Cat::SpaceName(),$lang,Information::SpaceName());
    }
    public  function loadCatPortfolio($lang)
    {
        return Cat::ListParent(Cat::SpaceName(),$lang,Portfolio::SpaceName());
    }
    public  function loadCatService($lang)
    {
        return Cat::ListParent(Cat::SpaceName(),$lang,Service::SpaceName());
    }
    public  function loadCatJob($lang)
    {
        return Cat::ListParent(Cat::SpaceName(),$lang,Job::SpaceName());
    }
    
    public function ActiveCatProduct(Product $id){



        $catId=FindCatId($id,Product::SpaceName());
      $listCAt=Cat::ListParent(Cat::SpaceName(),$id->lang_id,Product::SpaceName());

        return response()->json(['catId'=>$catId,"listCat"=>$listCAt],200);

    }
    public function ActiveCatArticle(Article $id){



        $catId=FindCatId($id,Article::SpaceName());
        $listCAt=Cat::ListParent(Cat::SpaceName(),$id->lang_id,Article::SpaceName());

        return response()->json(['catId'=>$catId,"listCat"=>$listCAt],200);

    }
    public function ActiveCatInformation(Information $id){



        $catId=FindCatId($id,Information::SpaceName());
        $listCAt=Cat::ListParent(Cat::SpaceName(),$id->lang_id,Information::SpaceName());

        return response()->json(['catId'=>$catId,"listCat"=>$listCAt],200);

    }
    public function ActiveCatService(Service $id){



        $catId=FindCatId($id,Service::SpaceName());
        $listCAt=Cat::ListParent(Cat::SpaceName(),$id->lang_id,Service::SpaceName());

        return response()->json(['catId'=>$catId,"listCat"=>$listCAt],200);

    }
    public function ActiveCatPortfolio(Portfolio $id){



        $catId=FindCatId($id,Portfolio::SpaceName());
        $listCAt=Cat::ListParent(Cat::SpaceName(),$id->lang_id,Portfolio::SpaceName());

        return response()->json(['catId'=>$catId,"listCat"=>$listCAt],200);

    }
    public function ActiveCatJob(Job $id){



        $catId=FindCatId($id,Job::SpaceName());
        $listCAt=Cat::ListParent(Cat::SpaceName(),$id->lang_id,Job::SpaceName());

        return response()->json(['catId'=>$catId,"listCat"=>$listCAt],200);

    }





    public function insertArticle(Request $request)
    {



        $cat=Cat::create([

            'user_id'=>auth()->user()->id,
            'lang_id'=>$request->langCat,
            'parent'=>$request->parentCat,
            'model_type'=>Article::SpaceName(),
            "status"=>($request->status=="on") ? "1":"0",
            'order'=>$request->order,
            'name'=>$request->name,
            'level'=>"0",

        ]);

       if($request->parentCat!="0"){
           $parentList=find_parent($cat->parent,Cat::SpaceName());

           $parentList->update([

               "level"=>$parentList->level + 1
           ]);
       }




        if(!$cat){
            toastr()->error('اطلاعات شما ثبت نشد');

        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("articles.create"));


        }

    }
    public function insertProduct(Request $request)
    {



        $cat=Cat::create([

            'user_id'=>auth()->user()->id,
            'lang_id'=>$request->langCat,
            'parent'=>$request->parentCat,
            'model_type'=>Product::SpaceName(),
            "status"=>($request->status=="on") ? "1":"0",
            'order'=>$request->order,
            'name'=>$request->name,
            'level'=>"0",

        ]);

        if($request->parentCat!="0"){
            $parentList=find_parent($cat->parent,Cat::SpaceName());

            $parentList->update([

                "level"=>$parentList->level + 1
            ]);
        }




        if(!$cat){
            toastr()->error('اطلاعات شما ثبت نشد');

        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("products.create"));


        }

    }
    public function insertInformation(Request $request)
    {



        $cat=Cat::create([

            'user_id'=>auth()->user()->id,
            'lang_id'=>$request->langCat,
            'parent'=>$request->parentCat,
            'model_type'=>Information::SpaceName(),
            "status"=>($request->status=="on") ? "1":"0",
            'order'=>$request->order,
            'name'=>$request->name,
            'level'=>"0",

        ]);

        if($request->parentCat!="0"){
            $parentList=find_parent($cat->parent,Cat::SpaceName());

            $parentList->update([

                "level"=>$parentList->level + 1
            ]);
        }




        if(!$cat){
            toastr()->error('اطلاعات شما ثبت نشد');

        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("informations.create"));


        }

    }
    public function insertPortfolio(Request $request)
    {



        $cat=Cat::create([

            'user_id'=>auth()->user()->id,
            'lang_id'=>$request->langCat,
            'parent'=>$request->parentCat,
            'model_type'=>Portfolio::SpaceName(),
            "status" => ($request->status == "on") ? "1" : "0",
            'order'=>$request->order,
            'name'=>$request->name,
            'level'=>"0",

        ]);

        if($request->parentCat!="0"){
            $parentList=find_parent($cat->parent,Cat::SpaceName());

            $parentList->update([

                "level"=>$parentList->level + 1
            ]);
        }




        if(!$cat){
            toastr()->error('اطلاعات شما ثبت نشد');

        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("portfolios.create"));


        }

    }
    public function insertService(Request $request)
    {



        $cat=Cat::create([

            'user_id'=>auth()->user()->id,
            'lang_id'=>$request->langCat,
            'parent'=>$request->parentCat,
            'model_type'=>Service::SpaceName(),
            "status"=>($request->status=="on") ? "1":"0",
            'order'=>$request->order,
            'name'=>$request->name,
            'level'=>"0",

        ]);

        if($request->parentCat!="0"){
            $parentList=find_parent($cat->parent,Cat::SpaceName());

            $parentList->update([

                "level"=>$parentList->level + 1
            ]);
        }




        if(!$cat){
            toastr()->error('اطلاعات شما ثبت نشد');

        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("services.create"));


        }

    }
    public function insertJob(Request $request)
    {



        $cat=Cat::create([

            'user_id'=>auth()->user()->id,
            'lang_id'=>$request->langCat,
            'parent'=>$request->parentCat,
            'model_type'=>Job::SpaceName(),
            "status"=>($request->status=="on") ? "1":"0",
            'order'=>$request->order,
            'name'=>$request->name,
            'level'=>"0",

        ]);

        if($request->parentCat!="0"){
            $parentList=find_parent($cat->parent,Cat::SpaceName());

            $parentList->update([

                "level"=>$parentList->level + 1
            ]);
        }




        if(!$cat){
            toastr()->error('اطلاعات شما ثبت نشد');

        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("jobs.create"));


        }

    }
}
