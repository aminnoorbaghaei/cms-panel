<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\LanguageRequest;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages=Language::latest()->paginate(5);
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];

        return view("admin.language.languages",compact("languages","position","code","trans"));
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

        return view("admin.language.create",compact("position","code","trans"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LanguageRequest $request)
    {

        $language=Language::create([
            "name"=>$request->name,
            "code"=>$request->code,
            "icon"=>$request->icon,
            "position"=>$request->position

        ]);
        if(!$language)
        {
            toastr()->error('اطلاعات شما ثبت نشد');
        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("languages.index"));


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
     * @param $language
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Language $language)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];

        return view("admin.language.edit",compact("language","position","trans","code"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $language
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Language $language )
    {
      
        $language->update([
            
            "name"=>$request->name,
            "code"=>$request->code,
            "icon"=>$request->icon,
            "position"=>$request->position

        ]);

        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('languages.index'));
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


            $edit=route("languages.edit",["id"=>$item->id]);
            $csrf= csrf_field();

            $item->icon="<span class='$item->icon'></span>";

            $item->cat=FindCat($item,Language::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a>";


        }


        $test= $items->render();

        $data=[
            "languages"=>$items,
            "paginate"=> $test,
            "counter"=>Language::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $languages = Language::latest()->paginate($count);
        return $this->JsonTableData($languages);


    }

    public  function getDefault(){

        $languages = Language::latest()->paginate(5);
        return $this->JsonTableData($languages);

    }
}
