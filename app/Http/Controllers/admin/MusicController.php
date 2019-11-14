<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\MusicRequest;
use App\Menu;
use App\Music;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics=Music::latest()->get();
        return view("admin.music.musics",compact("musics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.music.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param MusicRequest $request
     * @return void
     */
    public function store(MusicRequest $request)
    {

        Music::create([

            "title"=>$request->title,
            "body"=>$request->body,
            "user_id"=>auth()->user()->id,
            "order"=>$request->order,
            "imageUrl"=>$request->imageUrl,
            "status"=>$request->status,

        ]);

        return redirect(route('musics.index'));
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
     * @param Music $music
     * @return void
     */
    public function edit(Music $music)
    {
        return view("admin.music.edit",compact("music"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Music $music
     * @return void
     */
    public function update(Request $request, Music $music)
    {
        $music->update([

            "title"=>$request->title,
            "user_id"=>auth()->user()->id,
            "order"=>$request->order,
            "status"=>$request->status,

        ]);
        return redirect(route('musics.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Music $music
     * @return \Illuminate\Http\Response
     */
    public function destroy(Music $music)
    {
        $music->delete();
        return redirect(route('musics.index'));
    }
}
