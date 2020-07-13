<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.partners.index')->with('partners', Partner::all())
        ->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.create')
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
            'title'=>'required|unique:partners',
            'logo'=>'required'
        ]);

        $logo = $request->logo;
        $logo_new_name = time().$logo->getClientOriginalName();
        $logo->move('uploads/partners', $logo_new_name);


        $partner = Partner::create([
            'title' => $request->title,
            'logo' => 'uploads/partners/' .$logo_new_name,
            'slug' => str_slug($request->title)
        ]);

        Session::flash('success', 'partner created successfully.');


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
        $partner = Partner::find($id);

        return view('admin.partners.edit')->with('partner', $partner)
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
            'title'=>'required'
        ]);

        $partner = Partner::find($id);

        if($request->hasFile('logo'))
        {

            $logo = $request->logo;

            $logo_new_name = time().$logo->getClientOriginalName();

            $logo->move('uploads/partners', $logo_new_name);

            $partner->logo = 'uploads/partners/'.$logo_new_name;
        }



        $partner->title = $request->title;

        $partner->save();


        Session::flash('success', 'partner updated successfully.');


        return redirect()->route('partners');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);

        $partner->delete();

        Session::flash('success', 'The partner was just trashed.');


        return redirect()->back();
    }

    public function trashed()
    {

        $partners = Partner::onlyTrashed()->get();

        return view('admin.partners.trashed')->with('partners', $partners)
                                                  ->with('user', Auth::user());
    }

    public function kill($id)
    {
        $partner = Partner::withTrashed()->where('id', $id)->first();

        $partner->forceDelete();

        Session::flash('success', 'partner deleted permently.');

        return redirect()->back();
    }

    public function restore($id)
    {
        $partner = Partner::withTrashed()->where('id', $id)->first();

        $partner->restore();

        Session::flash('success', 'partner restored successfully.');

        return redirect()->route('partners');

    }
}
