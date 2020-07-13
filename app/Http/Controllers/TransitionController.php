<?php

namespace App\Http\Controllers;
use Session;
use App\Transition;
use Illuminate\Http\Request;

class TransitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transitions.index')->with('transitions', Transition::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.transitions.create');
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
            'title' => 'required|unique:transitions',
            'data' => 'required|unique:transitions'
        ]);

        $transition = new Transition;

        $transition->title = $request->title;
        $transition->data = $request->data;

        $transition->save();

        Session::flash('success', 'You succesfully created a transition.');

        return redirect()->route('transitions');

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
        $transition = Transition::find($id);

        return view('admin.transitions.edit')->with('transition', $transition);
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
        $transition = Transition::find($id);

        $transition->title = $request->title;
        $transition->data = $request->data;

        $transition->save();

        Session::flash('success', 'You succesfully updated the transition.');

        return redirect()->route('transitions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transition = Transition::find($id);

        foreach($transition->slides as $slide){
            $slide->forceDelete();
        }

        $transition->delete();

        Session::flash('success', 'You succesfully deleted the transition.');

        return redirect()->route('transitions');
    }
}
