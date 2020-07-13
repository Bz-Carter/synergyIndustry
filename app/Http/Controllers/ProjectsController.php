<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Project;
use App\Service;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projects.index')->with('projects', Project::all())->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();

        if($service->count() == 0) 
        {
            Session::flash('info', 'You must have some services project before attempting to create a service.');

            return redirect()->back();
        }

        return view('admin.projects.create')->with('services', $service)->with('user', Auth::user());
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
            'title'=>'required|unique:projects',
            'description'=>'required',
            'descriptionfr'=>'required',
            'client'=>'required',
            'about'=>'required',
            'aboutfr'=>'required',
            'image_01' => 'required|image',
            'image_02' => 'required|image',
            'image_03' => 'required|image',
            'service_id' => 'required'
        ]);

        $image_01 = $request->image_01;
        $image_01_new_name = time().$image_01->getClientOriginalName();
        $image_01->move('uploads/projects', $image_01_new_name);

        $image_02 = $request->image_02;
        $image_02_new_name = time().$image_02->getClientOriginalName();
        $image_02->move('uploads/projects', $image_02_new_name);

        $image_03 = $request->image_03;
        $image_03_new_name = time().$image_03->getClientOriginalName();
        $image_03->move('uploads/projects', $image_03_new_name);

        $project = Project::create([
            'title' => $request->title,
            'client' => $request->client,
            'description'=> $request->description,
            'descriptionfr'=> $request->descriptionfr,
            'about' => $request->about,
            'aboutfr' => $request->aboutfr,
            'image_01' => 'uploads/projects/' .$image_01_new_name,
            'image_02' => 'uploads/projects/' .$image_02_new_name,
            'image_03' => 'uploads/projects/' .$image_03_new_name,
            'service_id' => $request->service_id,
            'slug' => str_slug($request->title),
            'dateproject' => $request->dateproject
        ]);

        Session::flash('success', 'Project created successfully.');


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
        $project = Project::find($id);

        return view('admin.projects.edit')->with('project', $project)->with('services', Service::all())->with('user', Auth::user());
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
            'title'=>'required',
            'client'=>'required',
            'description'=>'required',
            'descriptionfr'=>'required',
            'about'=>'required',
            'aboutfr'=>'required',
            'service_id' => 'required'
        ]);

        $project = Project::find($id);
        
        if($request->hasFile('image_01'))
        {
           
            $image_01 = $request->image_01;

            $image_01_new_name = time().$image_01->getClientOriginalName();

            $image_01->move('uploads/projects', $image_01_new_name);

            $project->image_01 = 'uploads/projects/'.$image_01_new_name;
        }

        if($request->hasFile('image_02'))
        {
           
            $image_02 = $request->image_02;

            $image_02_new_name = time().$image_02->getClientOriginalName();

            $image_02->move('uploads/projects', $image_02_new_name);

            $project->image_02 = 'uploads/projects/'.$image_02_new_name;
        }

        if($request->hasFile('image_03'))
        {
           
            $image_03 = $request->image_03;

            $image_03_new_name = time().$image_03->getClientOriginalName();

            $image_03->move('uploads/projects', $image_03_new_name);

            $project->image_03 = 'uploads/projects/'.$image_03_new_name;
        }

        $project->title = $request->title;

        $project->client = $request->client;

        $project->description = $request->description;

        $project->descriptionfr = $request->descriptionfr;

        $project->about = $request->about;

        $project->aboutfr = $request->aboutfr;

        $project->service_id = $request->service_id;

        $project->dateproject = $request->dateproject;

        $project->save();


        Session::flash('success', 'project updated successfully.');


        return redirect()->route('projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        $project->delete();

        Session::flash('success', 'The project was just trashed.');


        return redirect()->back();
    }

    public function trashed()
    {
        
        $projects = Project::onlyTrashed()->get();

        return view('admin.projects.trashed')->with('projects', $projects)->with('user', Auth::user());
    }

    public function kill($id)
    {
        $project = Project::withTrashed()->where('id', $id)->first();

        $project->forceDelete();

        Session::flash('success', 'project deleted permently.');

        return redirect()->back();
    }

    public function restore($id)
    {
        $project = Project::withTrashed()->where('id', $id)->first();

        $project->restore();

        Session::flash('success', 'project restored successfully.');

        return redirect()->route('projects');
    
    }
}
