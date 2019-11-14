<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\QuestionRequest;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=Question::latest()->get();
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.question.questions",compact("questions","position","code","trans"));
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
        return view("admin.question.create",compact("code","position","trans"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {



        $requests=[
            "ask"=>$request->ask,
            "answer"=>$request->answer,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "order"=>$request->order,
            "lang_id"=>$request->lang,


        ];

        return  Question::CreateRecord(Question::SpaceName(),$requests,$request,"questions.index",true,null,true,"images",false,null);



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
     * @param Question $question
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Question $question)
    {

        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];
        return view("admin.question.edit",compact("question","code","position","trans"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Question $question
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Question $question)
    {
        $question->update([

            "ask"=>$request->ask,
            "answer"=>$request->answer,
            "user_id"=>auth()->user()->id,
            "status"=>($request->status=="on") ? "1":"0",
            "order"=>$request->order,
            "lang_id"=>$request->lang,


        ]);

        $question->media()->delete($question->id);


        $question->addMedia($request->image)->toMediaCollection('images');

        toastr()->success('اطلاعات شما با موفقیت ثبت شد');
        return redirect(route('questions.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Question $question
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @internal param int $id
     */
    public function destroy(Question $question)
    {

        $question->delete();
        
        $question->media()->delete($question->id);

        if ($question) {
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
            $edit=route("questions.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Question::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "questions"=>$items,
            "paginate"=> $test,
            "counter"=>Question::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $questions = Article::latest()->paginate($count);
        return $this->JsonTableData($questions);


    }

    public  function getDefault(){

        $questions = Question::latest()->paginate(5);
        return $this->JsonTableData($questions);

    }
}
