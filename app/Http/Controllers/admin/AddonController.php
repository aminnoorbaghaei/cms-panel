<?php

namespace App\Http\Controllers\admin;

use App\Addon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddonController extends Controller
{
    public  function Show(){


        
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        $addons=Addon::latest()->get();

        return view("admin.addon.addons",compact("addons","position","code","trans"));
        
    }
    public function JsonTableData($items){


        foreach ($items as $item)
        {

          
                      

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a>";


        }


        $test= $items->render();

        $data=[
            "addons"=>$items,
            "paginate"=> $test,
            "counter"=>Addon::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $addons = Addon::latest()->paginate($count);

        return $this->JsonTableData($addons);


    }
    public  function getDefault(){

        $addons = Addon::latest()->paginate(10);

        return $this->JsonTableData($addons);
    }
}
