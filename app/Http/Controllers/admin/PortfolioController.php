<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Requests\PortfolioRequest;

use App\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
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
        $portfoilis=Portfolio::latest()->get();
        return view("admin.portfolio.portfolios",compact("portfoilis","code","position","trans"));
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
        return view("admin.portfolio.create",compact("position","trans","code"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PortfolioRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
    {

       
        $portfolio=Portfolio::create([
            "title"=>$request->title,
            "body"=>$request->body,
            "user_id"=>auth()->user()->id,
            "customer_id"=>$request->customer_id,
            "status" => ($request->status == "on") ? "1" : "0",
            "condition"=>$request->condition,
            "descrition"=>$request->decrition,
            "keyword"=>$request->keyword,
            "lang_id"=>$request->lang


        ]);
        $category=Category::create([

            "user_id"=>auth()->user()->id,
            "status" => ($request->status == "on") ? "1" : "0",
            "cat_id"=>$request->cat,
            "target"=>($request->target=='1') ?"_target" :"_self",
            "model_number"=>$portfolio->id,
            "model_type"=>Portfolio::SpaceName(),

        ]);

        $portfolio->addMedia($request->image)->toMediaCollection('images');
     
        if(!$portfolio)
        {
            toastr()->error('اطلاعات شما ثبت نشد');
        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("portfolios.index"));


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
     * @param portfolio $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.portfolio.edit",compact("portfolio","position","trans","code"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param portfolio $portfolio
     * @return void
     */
    public function update(Request $request, Portfolio $portfolio)
    {


        ChangCatModel($portfolio,Portfolio::SpaceName(),$request->parentCat);
        
        $portfolio->update([

            "title"=>$request->title,
            "body"=>$request->body,
            "user_id"=>auth()->user()->id,
            "customer_id"=>$request->customer_id,
            "status" => ($request->status == "on") ? "1" : "0",
            "condition"=>$request->condition,
            "descrition"=>$request->decrition,
            "keyword"=>$request->keyword,
            

        ]);
        return redirect(route('portfolios.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param portfolio $portfolio
     * @return void
     * @throws \Exception
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();

        if ($portfolio) {
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
            $edit=route("portfolios.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Portfolio::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "portfolios"=>$items,
            "paginate"=> $test,
            "counter"=>Portfolio::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $portfolios = Portfolio::latest()->paginate($count);

        return $this->JsonTableData($portfolios);


    }
    public  function getDefault(){

        $portfolios = Portfolio::latest()->paginate(10);

        return $this->JsonTableData($portfolios);
    }
}
