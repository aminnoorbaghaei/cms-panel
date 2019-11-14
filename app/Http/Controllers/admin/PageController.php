<?php

namespace App\Http\Controllers\admin;

use App\Addon;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
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
        $pages=Page::latest()->paginate(5);

        return view("admin.page.pages",compact("pages","position","trans","code"));
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
        $addons=Addon::latest()->get();
        return view("admin.page.create",compact("trans","code","position","addons"));
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
            "description"=>$request->description,
            "keyword"=>$request->keyword,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "order"=>$request->order,
            "target"=>($request->target=='1') ?"_target" :"_self",
            "lang_id"=>$request->lang,
        ];
        return Page::CreateRecord(Page::SpaceName(),$requests,$request,"pages.index",true,null,true,"images",false,null,true,"addons",$request->addon);
        
        
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
     * @param Page $page
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Page $page)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.page.edit",compact("page","position","code","trans"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Page $page
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Page $page)
    {
        $page->update([

            "title"=>$request->title,
            "description"=>$request->description,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "order"=>$request->order,
            "keyword"=>$request->keyword,
            "body"=>$request->body,
            "target"=>($request->target=='1') ?"_target" :"_self",


        ]);

        $page->media()->delete($page->id);


        $page->addMedia($request->image)->toMediaCollection('images');

        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('pages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Page $page
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Page $page)
    {
        $page->delete();
        
        $page->media()->delete($page->id);

        if ($page) {
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
            $edit=route("pages.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Page::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "pages"=>$items,
            "paginate"=> $test,
            "counter"=>Page::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $pages = Page::latest()->paginate($count);

        return $this->JsonTableData($pages);


    }
    public  function getDefault(){

        $pages = Page::latest()->paginate(10);

        return $this->JsonTableData($pages);
    }
}