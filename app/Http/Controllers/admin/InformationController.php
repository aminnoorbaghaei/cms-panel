<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Requests\InformationRequest;
use App\Information;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        $informations=Information::latest()->paginate(3);
        $counter=0;
        return view("admin.information.informations",compact("informations","counter","trans","position","code"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.information.create",compact("code","position","trans"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InformationRequest $request)
    {

        $requests=[
            "title"=>$request->title,
            "body"=>$request->body,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "order"=>$request->order,
            "keyword"=>$request->keyword,
            "description"=>$request->description,
            "target"=>($request->target=='1') ?"_target" :"_self",
            "lang_id"=>$request->lang
        ];
        $catlist=[
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "cat_id"=>$request->cat,
            "target"=>($request->target=='1') ?"_target" :"_self",
            "model_type"=>Information::SpaceName(),
        ];

        return  Information::CreateRecord(Information::SpaceName(),$requests,$request,"informations.index",true,null,true,"images",true,$catlist);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Information $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.information.edit",compact("information","code","trans","position"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Information $information
     * @return void
     */
    public function update(Request $request, Information $information)
    {

        ChangCatModel($information,Information::SpaceName(),$request->parentCat);
        
        $information->update([

            "title"=>$request->title,
            "body"=>$request->body,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "order"=>$request->order,
            "keyword"=>$request->keyword,
            "description"=>$request->description,
            "target"=>($request->target=='1') ?"_target" :"_self",
           

        ]);

        $information->media()->delete($information->id);


        $information->addMedia($request->image)->toMediaCollection('images');

        return redirect(route('informations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Information $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        
        $information->delete();

        $information->media()->delete($information->id);

        if ($information) {
            $data = [
                'status' => '1',
                'msg' => 'success'
            ];
            toastr()->success('اطلاعات شما  حذف شد');
        } else {
            $data = [
                'status' => '0',
                'msg' => 'fail'
            ];
            toastr()->warning('اطلاعات شما حذف نشد');



        }
        return response()->json($data);
    }
    public function JsonTableData($items){


        foreach ($items as $item)
        {

            $src=($item->hasMedia('images') ?  url("public".$item->getFirstMediaUrl('images')) : url("/public/admin/img/pic/no-pic.png"));
            $edit=route("informations.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Information::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "informations"=>$items,
            "paginate"=> $test,
            "counter"=>Information::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $informations = Information::latest()->paginate($count);

       return $this->JsonTableData($informations);


    }
    public  function getDefault(){

        $informations = Information::latest()->paginate(10);

        return $this->JsonTableData($informations);
    }



}
