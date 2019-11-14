<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\MenuRequest;
use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{

    
    
    public function loadMenu($lang)
    
    {
        return Menu::ListParent($lang);
        
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=Menu::latest()->paginate(5);

        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];

        return view("admin.menu.menus",compact("menus","trans","code","position"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param MenuRequest $menuRequest
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.menu.create",compact('trans','position','code'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MenuRequest $request
     * @return MenuRequest
     */
    public function store(MenuRequest $request)
    {


        $menu=Menu::create([
            "user_id"=>auth()->user()->id,
            "title"=>$request->title,
            "hrefUrl"=>($request->hrefUrl=="0") ? $request->manual_hrefUrl : $request->hrefUrl,
            "icon"=>$request->icon,
            "slug"=>$request->slug,
            "parent"=>$request->parent,
            "rel"=>$request->rel,
            "status"=>($request->status=="on") ? "1":"0",
            "lang_id"=>$request->lang,
            "level"=>"0"
        ]);


        if($request->parent!="0"){
            $parentList=find_Menu($menu->parent);

            $parentList->update([

                "level"=>$parentList->level + 1
            ]);
        }

        if(!$menu)
        {
            toastr()->error('اطلاعات شما ثبت نشد');
        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("menus.index"));
          

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
     * @param Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.menu.edit",compact("menu","trans","code","position"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Menu $menu
     * @return void
     */
    public function update(Request $request, Menu $menu)
    {



       if(!$request->has('manual_hrefUrl') || !$request->has('parent'))
       {

           $menu->update([

               "user_id"=>auth()->user()->id,
               "title"=>$request->title,
               "hrefUrl"=>$request->hrefUrl,
               "icon"=>$request->icon,
               "slug"=>$request->slug,
               "rel"=>$request->rel,
               "status"=>($request->status=="on") ? "1":"0",


           ]);

       }
        else
        {



            if($request->parent!="0"){
                $parentList=find_Menu($menu->parent);

                $parentList->update([

                    "level"=>$parentList->level - 1
                ]);
            }

            $menu->update([
                "user_id"=>auth()->user()->id,
                "title"=>$request->title,
                "hrefUrl"=>($request->hrefUrl=="0") ? $request->manual_hrefUrl : $request->hrefUrl,
                "icon"=>$request->icon,
                "slug"=>$request->slug,
                "parent"=>$request->parent,
                "rel"=>$request->rel,
                "status"=>($request->status=="on") ? "1":"0",
                "lang_id"=>$request->lang,
                "level"=>"0"
            ]);


            if($request->parent!="0"){
                $parentList=find_Menu($menu->parent);

                $parentList->update([

                    "level"=>$parentList->level + 1
                ]);
            }


        }



        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('menus.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Menu $menu
     * @return void
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        if ($menu) {
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

    public  function load()
    {

        return Menu::whereStatus(1)->get();
    }
    public function JsonTableData($items){


        foreach ($items as $item)
        {

            $edit=route("menus.edit",["id"=>$item->id]);
            $csrf= csrf_field();
            $item->icon="<span class='$item->icon' ></span>";
            $item->hrefMenu="<a href='$item->hrefUrl' target='_blank'>لینک</a>";

            $item->cat=FindCat($item,Menu::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success model_img img-fluid' href='#' data-toggle='modal' data-target='#createmodel' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "menus"=>$items,
            "paginate"=> $test,
            "counter"=>Menu::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $menus = Menu::latest()->paginate($count);
        return $this->JsonTableData($menus);


    }

    public  function getDefault(){

        $menus = Menu::latest()->paginate(5);
        return $this->JsonTableData($menus);

    }
}
