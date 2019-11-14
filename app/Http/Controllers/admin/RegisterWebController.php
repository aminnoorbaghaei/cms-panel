<?php

namespace App\Http\Controllers\admin;

use App\RegisterWeb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registerwebs=RegisterWeb::latest()->get();
        return view("admin.registerweb.registerwebs",compact("registerwebs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.registerweb.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RegisterWeb::create([
            "title"=>$request->title,
            "code"=>"123456",
            "address"=>$request->address,
            "user_id"=>auth()->user()->id,
            "status"=>$request->status


        ]);
        return redirect(route("registerwebs.index"));
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
     * @param RegisterWeb $registerWeb
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterWeb $registerWeb)
    {
        return view("admin.registerweb.edit",compact("registerWeb"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param RegisterWeb $registerWeb
     * @return void
     */
    public function update(Request $request, RegisterWeb $registerWeb)
    {
        $registerWeb->update([

            "title"=>$request->title,
            "address"=>$request->address,
            "user_id"=>auth()->user()->id,
            "order"=>$request->order,
            "status"=>$request->status,

        ]);
        return redirect(route('registerwebs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param RegisterWeb $registerWeb
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterWeb $registerWeb)
    {
        $registerWeb->delete();
        return redirect(route('registerwebs.index'));
    }
}
