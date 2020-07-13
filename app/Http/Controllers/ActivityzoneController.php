<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Activityzone;
use Illuminate\Http\Request;

class ActivityzoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.activityzones.index')->with('activityzones', Activityzone::all())
        ->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activityzones.create')
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
            'name'=>'required|unique:activityzones',
            'email'=>'required',
            'phone'=>'required',
            'logo'=>'required'
        ]);

        $logo = $request->logo;
        $logo_new_name = time().$logo->getClientOriginalName();
        $logo->move('uploads/activityzones', $logo_new_name);


        $activityzone = Activityzone::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'logo' => 'uploads/activityzones/' .$logo_new_name,
            'slug' => str_slug($request->name)
        ]);

        Session::flash('success', 'activityzone created successfully.');


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
        $activityzone = Activityzone::find($id);

        return view('admin.activityzones.edit')->with('activityzone', $activityzone)
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
            'name'=>'required',
            'email'=>'required',
            'phone'=>'nullable'
        ]);

        $activityzone = Activityzone::find($id);

        if($request->hasFile('logo'))
        {

            $logo = $request->logo;

            $logo_new_name = time().$logo->getClientOriginalName();

            $logo->move('uploads/activityzones', $logo_new_name);

            $activityzone->logo = 'uploads/activityzones/'.$logo_new_name;
        }



        $activityzone->name = $request->name;

        $activityzone->email = $request->email;

        $activityzone->phone = $request->phone;

        $activityzone->save();


        Session::flash('success', 'activityzone updated successfully.');


        return redirect()->route('activityzones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activityzone = Activityzone::find($id);

        $activityzone->delete();

        Session::flash('success', 'The activityzone was just trashed.');


        return redirect()->back();
    }

    public function trashed()
    {

        $activityzones = Activityzone::onlyTrashed()->get();

        return view('admin.activityzones.trashed')->with('activityzones', $activityzones)
                                                  ->with('user', Auth::user());
    }

    public function kill($id)
    {
        $activityzone = activityzone::withTrashed()->where('id', $id)->first();

        $activityzone->forceDelete();

        Session::flash('success', 'activityzone deleted permently.');

        return redirect()->back();
    }

    public function restore($id)
    {
        $activityzone = Activityzone::withTrashed()->where('id', $id)->first();

        $activityzone->restore();

        Session::flash('success', 'activityzone restored successfully.');

        return redirect()->route('activityzones');

    }
}
