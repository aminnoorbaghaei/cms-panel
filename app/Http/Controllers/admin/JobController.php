<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
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
        $jobs=Job::latest()->get();
        return view("admin.job.jobs",compact("jobs","trans","code","position"));
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
        return view("admin.job.create",compact("trans","position","code"));
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
            "title"=>$request->title,
            "body"=>$request->body,
            "user_id"=>auth()->user()->id,
            "order"=>$request->order,
            "number"=>$request->number,
            "keyword"=>$request->keyword,
            "description"=>$request->description,
            "lang_id"=>$request->lang,
            "address"=>$request->address,
            "email"=>$request->email,
            "mobile"=>$request->mobile,
            "phone"=>$request->phone,
            "status"=>($request->status == "on") ? "1" : "0",


        ];
        $catlist=[
            "user_id"=>auth()->user()->id,
            "status"=>($request->status == "on") ? "1" : "0",
            "cat_id"=>$request->cat,
            "target"=>($request->target=='1') ?"_target" :"_self",
            "model_type"=>Job::SpaceName(),
        ];

        return  Job::CreateRecord(Job::SpaceName(),$requests,$request,"jobs.index",true,null,true,"images",true,$catlist);



    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Job $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.job.edit",compact("job","position","code","trans"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Job $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {


        ChangCatModel($job,Job::SpaceName(),$request->parentCat);

            $job->update([

                "title"=>$request->title,
                "body"=>$request->body,
                "user_id"=>auth()->user()->id,
                "order"=>$request->order,
                "number"=>$request->number,
                "keyword"=>$request->keyword,
                "description"=>$request->description,
                "address"=>$request->address,
                "email"=>$request->email,
                "mobile"=>$request->mobile,
                "phone"=>$request->phone,
                "status"=>($request->status == "on") ? "1" : "0",

            ]);

        $job->media()->delete($job->id);


        $job->addMedia($request->image)->toMediaCollection('images');
        
        if(!$job){
            toastr()->error('اطلاعات شما ثبت نشد');

        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("jobs.index"));


        }



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Job $job
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @internal param int $id
     */
    public function destroy(Job $job)
    {
        $job->delete();

        if ($job) {
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
            $edit=route("jobs.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Job::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "jobs"=>$items,
            "paginate"=> $test,
            "counter"=>Job::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $jobs = Job::latest()->paginate($count);

        return $this->JsonTableData($jobs);


    }
    public  function getDefault(){

        $jobs = Job::latest()->paginate(10);

        return $this->JsonTableData($jobs);
    }
}
