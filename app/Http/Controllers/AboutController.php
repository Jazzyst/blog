<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }


    public function store(Request $request)
    {
        dd($request);
    }
}
