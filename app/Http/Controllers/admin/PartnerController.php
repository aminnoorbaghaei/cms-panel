<?php

namespace App\Http\Controllers\admin;

use App\Partner;
use App\Position;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners=Partner::latest()->get();
        return view("admin.partner.partners",compact("partners"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.partner.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        


        $partner=Partner::create([
            "title"=>$request->title,
            "body"=>$request->body,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status == "on") ? "1" : "0",
            "lang_id"=>$request->langPos,
            "position_id"=>$request->parent,



        ]);

        $partner->addMedia($request->image)->toMediaCollection('images');

        if(!$partner)
        {
            toastr()->error('اطلاعات شما ثبت نشد');
        }
        else{
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("partners.index"));
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
     * @param Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view("admin.partner.edit",compact("partner"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $partner->update([

            "title"=>$request->title,
            "body"=>$request->body,
            "imageUrl"=>"asda",
            "user_id"=>auth()->user()->id,
            "status"=>($request->status == "on") ? "1" : "0",
            "lang_id"=>$request->lang
        ]);
        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('partners.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Partner $partner
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();

        if ($partner) {
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
            $edit=route("partners.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Partner::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "partners"=>$items,
            "paginate"=> $test,
            "counter"=>Partner::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $partners = Partner::latest()->paginate($count);

        return $this->JsonTableData($partners);


    }
    public  function getDefault(){

        $partners = Partner::latest()->paginate(10);

        return $this->JsonTableData($partners);
    }
}
