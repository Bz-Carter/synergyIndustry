<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services.index')->with('services', Service::all())->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create')->with('user', Auth::user());
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

            'name' => 'required',
            'namefr' => 'required',
            'extrait' => 'required',
            'extraitfr' => 'required',
            'featured' => 'required|image',
            'detail' => 'required',
            'detailb' => 'required',

        ]);

        
        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/services/featured/', $featured_new_name);


        //Summernote A
        $detail=$request->input('detail');

        $detailb=$request->input('detailb');

        libxml_use_internal_errors(true);

        $dom = new \DomDocument();
        $domb = new \DomDocument();

       $domb->loadHTML (mb_convert_encoding ($detailb, 'HTML-ENTITIES', 'UTF-8'));   

       $dom->loadHTML (mb_convert_encoding ($detail, 'HTML-ENTITIES', 'UTF-8'));   

        $images = $dom->getElementsByTagName('img');
        $images = $domb->getElementsByTagName('img');

        
        foreach ($images as $k => $img) {

            $data = $img->getAttribute('src');

        
            if (preg_match('/data:img/', $data)) {

            list($type, $data) = explode(';', $data);

            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);

            $image_name= '/uploads/services/' . time().$k.'.png';

            $path = public_path() . $image_name;

            file_put_contents($path, $data);

            $img->removeAttribute('src');

            $img->setAttribute('src', $image_name);
            }
        }

        $detail = $dom->saveHTML();

        $detailb = $domb->saveHTML();

        $service = new Service;

        $service->name = $request->name;
        $service->namefr = $request->namefr;

        $service->slug = str_slug($request->name);

        $service->extrait = $request->extrait;
        $service->extraitfr = $request->extraitfr;

        $service->content = $detail;
        $service->contentfr = $detailb;

        $service->featured = 'uploads/services/featured/'.$featured_new_name;
		$service->save();


        Session::flash('success', 'You succesfully created a category.');


        return redirect()->route('services');

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
        $service = Service::find($id);

        return view('admin.services.edit')->with('service', $service)->with('user', Auth::user());
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

            'name' => 'required',
            'namefr' => 'required',
            'extrait' => 'required',
            'extraitfr' => 'required',
            'detail' => 'required',
            'detailb' => 'required',

        ]);

        $service = Service::find($id);

        if($request->hasFile('featured'))
        {

            $featured = $request->featured;

            $featured_new_name = time().$featured->getClientOriginalName();

            $featured->move('uploads/services/featured/', $featured_new_name);

            $service->featured = 'uploads/services/featured/'.$featured_new_name;
        }
        


        $detail=$request->detail;

        $detailb=$request->detailb;

        libxml_use_internal_errors(true);

        $dom = new \DomDocument();
        $domb = new \DomDocument();

       $domb->loadHTML (mb_convert_encoding ($detailb, 'HTML-ENTITIES', 'UTF-8'));   

       $dom->loadHTML (mb_convert_encoding ($detail, 'HTML-ENTITIES', 'UTF-8'));   

        $images = $dom->getElementsByTagName('img');
        $images = $domb->getElementsByTagName('img');

        
        foreach ($images as $k => $img) {

            $data = $img->getAttribute('src');

        
            if (preg_match('/data:img/', $data)) {

            list($type, $data) = explode(';', $data);

            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);

            $image_name= '/uploads/services/' . time().$k.'.png';

            $path = public_path() . $image_name;

            file_put_contents($path, $data);

            $img->removeAttribute('src');

            $img->setAttribute('src', $image_name);
            }
        }

        

        $detail = $dom->saveHTML();

        $detailb = $domb->saveHTML();

        $service->name = $request->name;
        $service->namefr = $request->namefr;

        $service->extrait = $request->extrait;
        $service->extraitfr = $request->extraitfr;

        $service->content = $detail;
        $service->contentfr = $detailb;

        $service->save();

        Session::flash('success', 'You succesfully updated the service.');

        return redirect()->route('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);

        foreach($service->projects as $project){
            $project->forceDelete();
        }

        $service->delete();

        Session::flash('success', 'You succesfully deleted the service.');

        return redirect()->route('services');
    }

}
