<?php

namespace App\Http\Controllers;

use Auth;
use App\Setting;
use Session;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        return view('admin.settings.settings')->with('settings', Setting::first())
                                              ->with('user', Auth::user());
    }

    public function update()
    {
        $this->validate(request(), [
            'site_name' => 'required',
            'address' => 'required',
            'contact_number_1' => 'required',
            'contact_number_2' => 'required',
            'contact_email' => 'required',
            'linked_in' => 'required',
            'facebook' => 'required'
        ]);

        $settings = Setting::first();

        $settings->site_name = request()->site_name;
        $settings->address = request()->address;
        $settings->contact_number_1 = request()->contact_number_1;
        $settings->contact_number_2 = request()->contact_number_2;
        $settings->contact_email = request()->contact_email;
        $settings->linked_in = request()->linked_in;
        $settings->facebook = request()->facebook;


        $settings->save();

        Session::flash('success', 'Settings updated.');
        
        return redirect()->back();
    }
}
