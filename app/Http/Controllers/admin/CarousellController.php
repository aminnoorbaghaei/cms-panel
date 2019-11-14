<?php

namespace App\Http\Controllers\admin;

use App\Carousell;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarousellController extends Controller
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
        $carousell=Carousell::latest()->get();
        return view("admin.carousell.carousells",compact("carousell","position","code","trans"));
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
        return view("admin.carousell.create",compact("position","code","trans"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider=Carousell::create([
            "title"=>$request->title,
            "description"=>$request->description,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "target"=>$request->target,
            "textBtn"=>$request->textBtn,
            "linkBtn"=>$request->linkBtn,
            "lang_id"=>$request->lang,


        ]);

        $slider->addMedia($request->image)->toMediaCollection('images');

        if(!$slider)
        {
            toastr()->error('اطلاعات شما ثبت نشد');
        }
        else
        {

            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("carousells.index"));

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
     * @param Carousell $carousell
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Carousell $carousell)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.carousell.edit",compact("carousell","position","code","trans"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Carousell $carousell
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Carousell $carousell)
    {
        $carousell->update([

            "title"=>$request->title,
            "description"=>$request->description,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "target"=>$request->target,
            "textBtn"=>$request->textBtn,
            "linkBtn"=>$request->linkBtn,
            "lang_id"=>$request->lang,

        ]);

        $carousell->media()->delete($carousell->id);


        $carousell->addMedia($request->image)->toMediaCollection('images');


        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('carousells.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Carousell $carousell
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @internal param int $id
     */
    public function destroy(Carousell $carousell)
    {
        $carousell->delete();

        if ($carousell) {
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
            $edit=route("carousells.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Carousell::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "carousells"=>$items,
            "paginate"=> $test,
            "counter"=>Carousell::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $carousell = Carousell::latest()->paginate($count);

        return $this->JsonTableData($carousell);


    }
    public  function getDefault(){

        $carousell = Carousell::latest()->paginate(10);

        return $this->JsonTableData($carousell);
    }
}
