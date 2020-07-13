<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmploymentsMail;
use Session;

class EmploymentsController extends Controller
{
    public function store(Request $request){
        
        
        // Required validation
        $data = ([
            'email' => $request->email,
            'message' => $request->message,
            'object' => $request->object,
            'name' => $request->name,
            'telephone' => $request->telephone,
            'document' => $request->file('document')
        ]);

       
            

        Mail::to('bzCarter@outlook.fr')->send(new EmploymentsMail($data));
        
        Session::flash('success', 'vous venez de postuler à une offre');

        return redirect()->route('offres');
       

    }
}
