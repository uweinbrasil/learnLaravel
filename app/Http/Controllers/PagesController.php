<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function imprint()
    {
        return view('pages.imprint');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
