<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Requests\ServiceRequest;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
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
        $services=Service::latest()->get();
        return view("admin.service.services",compact("services","code","trans","position"));
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
        return view("admin.service.create",compact("position","code","trans"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {

        $requests=[
            "title"=>$request->title,
            "order"=>$request->order,
            "description"=>$request->description,
            "user_id"=>auth()->user()->id,
            "status" => ($request->status == "on") ? "1" : "0",
            "icon"=>$request->icon,
            "lang_id"=>$request->lang

        ];
        $catlist=[
            "user_id"=>auth()->user()->id,
            "status" => ($request->status == "on") ? "1" : "0",
            "cat_id"=>$request->cat,
            "target"=>($request->target=='1') ?"_target" :"_self",
            "model_type"=>Service::SpaceName(),
        ];

        return  Service::CreateRecord(Service::SpaceName(),$requests,$request,"services.index",true,null,true,"images",true,$catlist);

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
     * @param Service $service
     * @return void
     */
    public function edit(Service $service)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.service.edit",compact("service","trans","position","code"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Service $service
     * @return void
     */
    public function update(Request $request, Service $service)
    {

        ChangCatModel($service,Service::SpaceName(),$request->parentCat);

        $service->update([

            "title"=>$request->title,
            "order"=>$request->order,
            "description"=>$request->description,
            "user_id"=>auth()->user()->id,
            "status" => ($request->status == "on") ? "1" : "0",
            "icon"=>$request->icon,
           

        ]);

        $service->media()->delete($service->id);


        $service->addMedia($request->image)->toMediaCollection('images');
        
        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route("services.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Service $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();

        $service->media()->delete($service->id);

        if ($service) {
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
            $edit=route("services.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Service::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "services"=>$items,
            "paginate"=> $test,
            "counter"=>Service::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $services = Service::latest()->paginate($count);

        return $this->JsonTableData($services);


    }
    public  function getDefault(){

        $services = Service::latest()->paginate(10);

        return $this->JsonTableData($services);
    }
}
