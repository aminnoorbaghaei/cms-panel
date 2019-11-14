<?php

namespace App\Http\Controllers\admin;

use App\Customer;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CustomerController extends Controller
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
        $customers=Customer::latest()->get();
        return view("admin.customer.customers",compact("customers","position","code","trans"));
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
        return view("admin.customer.create",compact("trans","code","position"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CustomerRequest $request
     * @return void
     */
    public function store(CustomerRequest $request)
    {
        

        $requests=[
            "title"=>$request->title,
            "description"=>$request->description,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "keyword"=>$request->keyword,
            "body"=>$request->body,
            "order"=>$request->order,
            "target"=>($request->target=='1') ?"_target" :"_self",
            "lang_id"=>$request->lang,


        ];

        return  Customer::CreateRecord(Customer::SpaceName(),$requests,$request,"customers.index",true,null,true,"images",false,null);


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
     * @param Customer $customer
     * @return void
     */
    public function edit(Customer $customer)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.customer.edit",compact("customer","position","code","trans"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Customer $customer
     * @return void
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update([

            "title"=>$request->title,
            "description"=>$request->description,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "order"=>$request->order,
            "keyword"=>$request->keyword,
            "body"=>$request->body,
            "target"=>($request->target=='1') ?"_target" :"_self",
            "lang_id"=>$request->lang,


        ]);

        $customer->media()->delete($customer->id);


        $customer->addMedia($request->image)->toMediaCollection('images');
        
        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('customers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        $customer->media()->delete($customer->id);

        if ($customer) {
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
            $edit=route("customers.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Customer::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "customers"=>$items,
            "paginate"=> $test,
            "counter"=>Customer::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $customers = Customer::latest()->paginate($count);

        return $this->JsonTableData($customers);


    }
    public  function getDefault(){

        $customers = Customer::latest()->paginate(10);

        return $this->JsonTableData($customers);
    }
}
