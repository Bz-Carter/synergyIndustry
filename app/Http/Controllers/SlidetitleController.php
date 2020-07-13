<?php

namespace App\Http\Controllers;
use Session;
use App\Slidetitle;
use Illuminate\Http\Request;

class SlidetitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slidetitles.index')->with('slidetitles', Slidetitle::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slidetitles.create');
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
            'title' => 'required|unique:slidetitles',
            'data' => 'required|unique:slidetitles'
        ]);

        $slidetitle = new Slidetitle;

        $slidetitle->title = $request->title;
        $slidetitle->data = $request->data;

        $slidetitle->save();

        Session::flash('success', 'You succesfully created a slidetitle.');

        return redirect()->route('slidetitles');

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
        $slidetitle = Slidetitle::find($id);

        return view('admin.slidetitles.edit')->with('slidetitle', $slidetitle);
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
        $slidetitle = Slidetitle::find($id);

        $slidetitle->title = $request->title;
        $slidetitle->data = $request->data;

        $slidetitle->save();

        Session::flash('success', 'You succesfully updated the slidetitle.');

        return redirect()->route('slidetitles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slidetitle = Slidetitle::find($id);

        foreach($slidetitle->slides as $slide){
            $slide->forceDelete();
        }

        $slidetitle->delete();

        Session::flash('success', 'You succesfully deleted the slidetitle.');

        return redirect()->route('slidetitles');
    }
}
