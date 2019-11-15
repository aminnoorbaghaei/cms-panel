<?php

namespace App\Http\Controllers\admin;

use App\Health;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $healths=Health::latest()->paginate(10);
        return view("admin.health.healths",compact("healths"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.health.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $health=Health::create([
            
            "first_name"=>$request->first_name,
            "last_name"=>$request->last_name,
            "email"=>$request->email,
            "age"=>$request->age,
            "addressHome"=>$request->addressHome,
            "addressCompany"=>$request->addressCompany,
            "phone"=>$request->phone,
            "mobile"=>$request->mobile,
            "password"=>bcrypt($request->password),
            "status"=>$request->status,
            "lang_id"=>$request->langSpe,
            "user_id"=>auth()->user()->id,



        ]);
        $health->addMedia($request->image)->toMediaCollection('images');
        if (!$health ) {
            toastr()->error('اطلاعات شما ثبت نشد');

        } else {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("healths.index"));


        }
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function JsonTableData($items){


        foreach ($items as $item)
        {

            $src=($item->hasMedia('images') ?  url("public".$item->getFirstMediaUrl('images')) : url("/public/admin/img/pic/no-pic.png"));
            $edit=route("healths.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Health::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "healths"=>$items,
            "paginate"=> $test,
            "counter"=>Health::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $healths = Health::latest()->paginate($count);
        return $this->JsonTableData($healths);


    }

    public  function getDefault(){

        $healths = Health::latest()->paginate(5);
        return $this->JsonTableData($healths);

    }

    public  function insertHealth(Request $request){

       $requests=[
           'user_id'=>auth()->user()->id,
           'lang_id'=>$request->langHeal,
           'parent'=>$request->parentHeal,
           "status"=>($request->status=="on") ? "1":"0",
           'order'=>$request->order,
           'name'=>$request->name,
           'level'=>"0",
       ];
        
       return  Health::CreateRecord(Health::SpaceName(),$requests,$request,"doctors.create",true,"parentHeal");
       

    }
    
    public  function loadHealth($lang){
        
        return Health::ListParent(Health::SpaceName(),$lang); 
    }
}
