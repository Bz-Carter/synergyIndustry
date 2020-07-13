<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\QuotesMail;
use Session;

class QuotesController extends Controller
{

    public function store(){
        $message = '';
        $data = request()->validate([
            'email' => 'required|email',
            'question_1' => 'required',
            'question_2' => 'required',
            'addtional_info' => 'nullable',
            'select_1' => 'required',
            'select_2' => 'required',
            'select_3' => 'required',
            'company_name' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'telephone' => 'required',
            'country' => 'required',
            'terms' => 'required'
        ]);
            

        Mail::to('bzCarter@outlook.fr')->send(new QuotesMail($data, $message));
        Session::flash('success', 'demande de devis effectuer');
        return redirect()->route('offres');
       

    }
}
