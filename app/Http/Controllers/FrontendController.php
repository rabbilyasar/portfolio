<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function send(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'message' => 'required|email'
        // ]);

        // dd($data);

        // send email

        Mail::to('test@test.com')->send(new ContactFormMail());
    }
}
