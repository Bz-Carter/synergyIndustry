<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Transition;
use App\Slideinfo;
use App\Slidetitle;
use App\Slide;
use Illuminate\Http\Request;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slides.index')->with('slides', Slide::all())
                                         ->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transitions = Transition::all();

        $slideinfos = Slideinfo::all();

        $slidetitles = Slidetitle::all();

        if($transitions->count() == 0 || $slideinfos->count() == 0 || $slidetitles->count() == 0)
        {
            Session::flash('info', 'You must have some transitions and slideinfos and slidetitles before attempting to create a Slide.');

            return redirect()->back();
        }

        return view('admin.slides.create')->with('transitions', $transitions)
                                          ->with('slideinfos', $slideinfos)
                                          ->with('slidetitles', $slidetitles)
                                          ->with('user', Auth::user());
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
            'title' => 'required',
            'titlefr' => 'required',
            'info' => 'required',
            'infofr' => 'required',
            'delay' => 'required',
            'transition_id' => 'required',
            'slideinfo_id' => 'required',
            'slidetitle_id' => 'required',
            'photo' => 'required|image'
        ]);

        $photo = $request->photo;

        $photo_new_name = time().$photo->getClientOriginalName();

        $photo->move('uploads/slides', $photo_new_name);

        $slide = Slide::create([
            'title' => $request->title,
            'titlefr' => $request->titlefr,
            'info' => $request->info,
            'infofr' => $request->infofr,
            'photo' => 'uploads/slides/' .$photo_new_name,
            'delay' => $request->delay,
            'transition_id' => $request->transition_id,
            'slideinfo_id' => $request->slideinfo_id,
            'slidetitle_id' => $request->slidetitle_id,
            'slug' => str_slug($request->title)
        ]);


        Session::flash('success', 'slide created successfully.');


        return redirect()->back();
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
        $slide = Slide::find($id);

        return view('admin.slides.edit')->with('slide', $slide)
                                        ->with('transitions', Transition::all())
                                        ->with('slidetitles', Slidetitle::all())
                                        ->with('slideinfos', Slideinfo::all())
                                        ->with('user', Auth::user());
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

        $this->validate($request, [
            'title' => 'required',
            'titlefr' => 'required',
            'info' => 'required',
            'infofr' => 'required',
            'delay' => 'required',
            'transition_id' => 'required',
            'slideinfo_id' => 'required',
            'slidetitle_id' => 'required',
        ]);

        $slide = Slide::find($id);

        if($request->hasFile('photo'))
        {

            $photo = $request->photo;

            $photo_new_name = time().$photo->getClientOriginalName();

            $photo->move('uploads/slides', $photo_new_name);

            $slide->photo = 'uploads/slides/'.$photo_new_name;
        }

        $slide->title = $request->title;
        $slide->titlefr = $request->titlefr;

        $slide->info = $request->info;
        $slide->infofr = $request->infofr;

        $slide->delay = $request->delay;

        $slide->transition_id = $request->transition_id;

        $slide->slideinfo_id = $request->slideinfo_id;

        $slide->slidetitle_id = $request->slidetitle_id;

        $slide->save();


        Session::flash('success', 'slide updated successfully.');


        return redirect()->route('slides');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $slide = Slide::find($id);

        $slide->delete();

        Session::flash('success', 'The slide was just trashed.');


        return redirect()->back();
    }

    public function trashed()
    {

        $slides = Slide::onlyTrashed()->get();

        return view('admin.slides.trashed')->with('slides', $slides)
        ->with('user', Auth::user());
    }

    public function kill($id)
    {
        $slide = Slide::withTrashed()->where('id', $id)->first();

        $slide->forceDelete();

        Session::flash('success', 'slide deleted permently.');

        return redirect()->back();
    }

    public function restore($id)
    {
        $slide = Slide::withTrashed()->where('id', $id)->first();

        $slide->restore();

        Session::flash('success', 'slide restored successfully.');

        return redirect()->route('slides');
    }
}
