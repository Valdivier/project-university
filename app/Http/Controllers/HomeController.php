<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewcontact()
    {
        return view('public.contact');
    }

    public function admin()
    {
        //
        return view('catalog.movies-admin');
    }

     public function viewprofile()
    {
        //
        return view('public.profile');
    }
}
