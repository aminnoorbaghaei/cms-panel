<?php

namespace App\Http\Controllers\admin;

use App\Cat;
use App\Category;
use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
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
        $products=Product::latest()->paginate(3);
        $counter=0;
        return view("admin.product.products",compact("products","counter","trans","code","position"));
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
        return view("admin.product.create",compact("position","code","trans"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function store(ProductRequest $request)
    {


        $product=Product::create([

            "title"=>$request->title,
            "excerpt"=>$request->excerpt,
            "price"=>$request->price,
            "description"=>$request->description,
            "keyword"=>$request->keyword,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "target"=>($request->target=='1') ?"_target" :"_self",
            "lang_id"=>$request->lang


        ]);

        $category=Category::create([

            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "cat_id"=>$request->cat,
            "target"=>($request->target=='1') ?"_target" :"_self",
            "model_number"=>$product->id,
            "model_type"=>Product::SpaceName(),

        ]);

        $product->addMedia($request->image)->toMediaCollection('images');

        if(!$product)
        {
            toastr()->error('اطلاعات شما ثبت نشد');
        }
        else
        {
            toastr()->success('اطلاعات شما با موفقیت ثبت شد');
            return redirect(route("products.index"));


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
     * @param Product $product
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,Request $request)
    {

        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.product.edit",compact("product","position","code","trans"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Product $product
     * @return void
     */
    public function update(Request $request, Product $product)
    {


        ChangCatModel($product,Product::SpaceName(),$request->parentCat);

        $product->update([


            "title"=>$request->title,
            "excerpt"=>$request->excerpt,
            "price"=>$request->price,
            "description"=>$request->description,
            "keyword"=>$request->keyword,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "target"=>($request->target=='1') ?"_target" :"_self",

        ]);


        $product->media()->delete($product->id);


        $product->addMedia($request->image)->toMediaCollection('images');

        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        $product->media()->delete($product->id);

        if ($product) {
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
            $edit=route("products.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Product::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "products"=>$items,
            "paginate"=> $test,
            "counter"=>Product::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $products = Product::latest()->paginate($count);
        return $this->JsonTableData($products);


    }

    public  function getDefault(){

        $products = Product::latest()->paginate(10);
        return $this->JsonTableData($products);

    }


    public function ShowFactor(){
        
        return "Product Factor";
    }
}
