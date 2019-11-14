<?php

namespace App\Http\Controllers\admin;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class DoctorController extends Controller
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
        $doctors=Doctor::latest()->paginate(10);
        return view("admin.doctor.doctors",compact("doctors","trans","position","code"));
      
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
        return view("admin.doctor.create",compact("position","code","trans"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $requests=[
            "full_name"=>Doctor::FullName($request->first_name,$request->last_name),
            "first_name"=>$request->first_name,
            "last_name"=>$request->last_name,
            "specialty_id"=>$request->specialty,
            "health_id"=>$request->health,
            "email"=>$request->email,
            "age"=>$request->age,
            "addressHome"=>$request->addressHome,
            "addressCompany"=>$request->addressCompany,
            "phone"=>$request->phone,
            "mobile"=>$request->mobile,
            "password"=>bcrypt($request->password),
            "status"=>($request->status=="on") ? "1":"0",
            "lang_id"=>$request->langSpe,
            "user_id"=>auth()->user()->id,
        ];

        return Doctor::CreateRecord(Doctor::SpaceName(),$requests,$request,"doctors.index",true,null,true,"images");
        
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
     * @param Doctor $doctor
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Doctor $doctor)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];

        return view("admin.doctor.edit",compact("doctor","position","code","trans"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {

        $doctor->update([


            "title"=>$request->title,
            "excerpt"=>$request->excerpt,
            "price"=>$request->price,
            "description"=>$request->description,
            "keyword"=>$request->keyword,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "target"=>($request->target=='1') ?"_target" :"_self",

        ]);


        $doctor->media()->delete($doctor->id);


        $doctor->addMedia($request->image)->toMediaCollection('images');

        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('doctors.index'));
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
            $edit=route("doctors.edit",["id"=>$item->id]);
            $csrf= csrf_field();


            $item->health=FindHealth($item,"name");
            $item->specialties=FindSpecialties($item,"name");
            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Doctor::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "doctors"=>$items,
            "paginate"=> $test,
            "counter"=>Doctor::latest()->count()

        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $doctors = Doctor::latest()->paginate($count);
        return $this->JsonTableData($doctors);


    }

    public  function getDefault(){

        $doctors = Doctor::latest()->paginate(5);
        return $this->JsonTableData($doctors);

    }
}
