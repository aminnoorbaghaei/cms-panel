<?php

namespace App\Http\Controllers\admin;

use App\Article;
use App\Exports\ArticleExport;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;


class ArticleController extends Controller
{


    public function exportExcel($data){



        return Excel::download(new ArticleExport($data), time().'.xlsx',null);
    }
    public function exportCsv($data){

        return Excel::download(new ArticleExport($data), time().'.csv',null);
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

        return view("admin.article.articles", compact("articles","code","position","trans"));

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

        return view("admin.article.create",compact("code","position","trans"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest $request
     * @return void
     */
    public function store(ArticleRequest $request)
    {


        $requests=[
            "title" => $request->title,
            "body" => $request->body,
            "description" => $request->description,
            "keyword" => $request->keyword,
            "user_id" => auth()->user()->id,
            "status" => ($request->status == "on") ? "1" : "0",
            "order" => $request->order,
            "target" => ($request->target == '1') ? "_target" : "_self",
            "lang_id" => $request->lang,
        ];
        $catlist=[
            "user_id" => auth()->user()->id,
            "status" => ($request->status == "on") ? "1" : "0",
            "cat_id" => $request->cat,
            "target" => ($request->target == '1') ? "_target" : "_self",
            "model_type" => Article::SpaceName(),
        ];

        return  Article::CreateRecord(Article::SpaceName(),$requests,$request,"articles.index",true,null,true,"images",true,$catlist);







    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $data=SetInformationLang(auth()->user(),$this->defaultPosition,$this->defaultCode);

        $trans=$data['trans'];
        $code=$data['code'];
        $position=$data['position'];

        return view("admin.article.edit", compact("article","trans","position","code"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Article $article
     * @return void
     */
    public function update(Request $request, Article $article)
    {


        ChangCatModel($article, Article::SpaceName(), $request->parentCat);

        $article->update([

            "title" => $request->title,
            "body" => $request->body,
            "description" => $request->description,
            "keyword" => $request->keyword,
            "user_id" => auth()->user()->id,
            "status" => ($request->status == "on") ? "1" : "0",
            "order" => $request->order,
            "target" => ($request->target == "1") ? "_target" : "_self",

        ]);

        $article->media()->delete($article->id);


        $article->addMedia($request->image)->toMediaCollection('images');

        toastr()->success('اطلاعات شما با موفقیت ثبت شد');

        return redirect(route('articles.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @internal param int $id
     */
    public function destroy(Article $article)
    {



        $article->delete();

        $article->media()->delete($article->id);

        if ($article) {
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
            $edit=route("articles.edit",["id"=>$item->id]);
            $csrf= csrf_field();



            $item->img=  "<img width='100px' class='img-responsive' src='$src' >";


            $item->cat=FindCat($item,Article::SpaceName(),"name");

            $item->statusBar=($item->status==1 ? " <span class='badge badge-success'>فعال</span>" : " <span class='badge badge-danger'>غیر فعال</span>" );

            $item->action="<a class='btn btn-success' href='#' title='جزییات'><i class='fa fa-search-plus'></i></a><a class='btn btn-info' href='$edit' title='ویرایش'> <i class='fa fa-edit'></i></a><button  class='btn btn-danger' title='حذف' data-level='$item->id' data-option='remove'>$csrf<i class='fa fa-trash'></i></button>";


        }


        $test= $items->render();

        $data=[
            "articles"=>$items,
            "paginate"=> $test,
            "counter"=>Article::latest()->count()


        ];

        return response()->json($data);

    }
    public  function changCount($count)
    {

        $articles = Article::latest()->paginate($count);
        return $this->JsonTableData($articles);


    }

    public  function getDefault(){

        $articles = Article::latest()->paginate(5);
        return $this->JsonTableData($articles);

    }
}
