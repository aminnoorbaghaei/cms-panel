<?php

namespace App\Http\Controllers\admin;

use App\Language;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport;


class UserController extends Controller
{
    public function exportExcel($data){



        return Excel::download(new UserExport($data), time().'.xlsx',null);
    }
    public function exportCsv($data){

        return Excel::download(new UserExport($data), time().'.csv',null);
    }

    /**
     * Display profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {

        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        $languages=Language::latest();
        $users=User::latest()->paginate(10);
        return view("admin.user.profile",compact("users","trans","code","position","languages"));
    }

    /**
     * Display contact.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        $users=User::latest()->paginate(10);
        return view("admin.user.contact",compact("users","trans","code","position"));
    }
    /**
     * Display personal.
     *
     * @return \Illuminate\Http\Response
     */
    public function personal()
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];

        $users=User::latest()->paginate(10);
        return view("admin.user.personal",compact("users","trans","code","position"));
    }


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
        $users=User::latest()->paginate(10);
       return view("admin.user.users",compact("users","trans","code","position"));
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
        return view("admin.user.create",compact("code","position","trans"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {


        $requests=[
            "full_name"=>User::FullName($request->first_name,$request->last_name),
            "first_name"=>$request->first_name,
            "last_name"=>$request->last_name,
            "email"=>$request->email,
            "age"=>$request->age,
            "addressHome"=>$request->addressHome,
            "addressCompany"=>$request->addressCompany,
            "phone"=>$request->phone,
            "mobile"=>$request->mobile,
            "password"=>bcrypt($request->password),
            "status" => ($request->status == "on") ? "1" : "0",
            "lang_id"=>$request->lang,
            "api_token"=>str::random(15)
        ];
        return User::CreateRecord(User::SpaceName(),$requests,$request,"users.index",true,null,true,"images",false,null,true,"roles",$request->role);
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
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.user.edit",compact("user","trans","code","position"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {




        if(is_null($request->password))
        {
            $user->update([

                "full_name"=>$request->full_name,
                "mobile"=>$request->mobile,
                "email"=>$request->email,
                "lang_id"=>$request->lang,
                "addressCompany"=>$request->addressCompany,
                "addressHome"=>$request->addressHome

            ]);
            if($request->image){
                $user->media()->delete($user->id);


                $user->addMedia($request->image)->toMediaCollection('images');
            }

        }
        else

        {
            $user->update([

                "full_name"=>$request->full_name,
                "mobile"=>$request->mobile,
                "email"=>$request->email,
                "password"=>bcrypt($request->password),
                "lang_id"=>$request->lang,
                "addressCompany"=>$request->addressCompany,
                "addressHome"=>$request->addressHome


            ]);
            if($request->image){
                $user->media()->delete($user->id);


                $user->addMedia($request->image)->toMediaCollection('images');

            }

        }

        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('panel.website.profile'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(User $user)
    {
        $user->delete();

        $user->media()->delete($user->id);

        if ($user) {
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
            $edit=route("users.edit",["id"=>$item->id]);
            $csrf= csrf_field();


            $item->role=$item->roles()->first()->label;
                
            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,User::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "users"=>$items,
            "paginate"=> $test,
            "counter"=>User::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $users = User::latest()->paginate($count);
        return $this->JsonTableData($users);


    }

    public  function getDefault(){

        $users = User::latest()->paginate(5);
        return $this->JsonTableData($users);

    }

    public function loadRole($lang){
        $role= Role::ListParent(Role::SpaceName(),$lang);

        $data=[

            "role"=>$role
        ];

        return response()->json($data);
    }
    public function loadPermission($lang){
        
        $permission= Permission::ListParent(Permission::SpaceName(),$lang);

        $data=[

            "permission"=>$permission
        ];

        return response()->json($data);
    }
    public function insertRole(Request $request){



        $requests=[
            'lang_id'=>$request->langRole,
            'parent'=>$request->parentRole,
            'name'=>$request->name,
            'label'=>$request->label,
            'level'=>"0",
            'model_type'=>Role::SpaceName()
        ];
        return Role::CreateRecord(Role::SpaceName(),$requests,$request,"users.create",true,"parentRole");

    }
}
