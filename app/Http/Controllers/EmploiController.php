<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\EmploiRequest;

use Illuminate\Support\Facades\Mail;

use App\Setting;
use App\Activityzone;
use App\Service;

class EmploiController extends Controller
{
    public function create()
    {
        return view('emploi')->with('settings', Setting::first())
                            ->with('activityzones', Activityzone::all())
                            ->with('services', Service::all());
    }

    public function store(EmploiRequest $request)
    {
        $file = storage_path('app/folder/your-file.pdf');

        Mail::to('lebz2016@gmail.com')
                ->attach($file, ['as' => 'File name', 'mime' => 'application/pdf'])
                ->send(new Emploi($request->except('token')));
        return redirect('/');
    }

    public function create2()
    {
        return view('devis')->with('settings', Setting::first())
                            ->with('activityzones', Activityzone::all())
                            ->with('services', Service::all());
    }

    public function store2(EmploiRequest $request)
    {
        $file = storage_path('app/folder/your-file.pdf');

        Mail::to('lebz2016@gmail.com')
                ->attach($file, ['as' => 'File name', 'mime' => 'application/pdf'])
                ->send(new Emploi($request->except('token')));
        return redirect('/');
    }
}
