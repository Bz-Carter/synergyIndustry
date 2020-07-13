<?php

namespace App\Http\Controllers;
use Session;
use App\Slideinfo;
use Illuminate\Http\Request;

class SlideinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slideinfos.index')->with('slideinfos', Slideinfo::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slideinfos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:slideinfos',
            'data' => 'required|unique:slideinfos'
        ]);

        $slideinfo = new Slideinfo;

        $slideinfo->title = $request->title;
        $slideinfo->data = $request->data;

        $slideinfo->save();

        Session::flash('success', 'You succesfully created a slideinfo.');

        return redirect()->route('slideinfos');

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slideinfo = Slideinfo::find($id);

        return view('admin.slideinfos.edit')->with('slideinfo', $slideinfo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slideinfo = Slideinfo::find($id);

        $slideinfo->title = $request->title;
        $slideinfo->data = $request->data;

        $slideinfo->save();

        Session::flash('success', 'You succesfully updated the slideinfo.');

        return redirect()->route('slideinfos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slideinfo = Slideinfo::find($id);

        foreach($slideinfo->slides as $slide){
            $slide->forceDelete();
        }

        $slideinfo->delete();

        Session::flash('success', 'You succesfully deleted the slideinfo.');

        return redirect()->route('slideinfos');
    }
}
