<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontpage.landingpage', [
         'title' => 'Landing Page'
        ]);
    }
    
    public function about()
    {
        return view('frontpage.about');
    }

    public function contact()
    {
        return view('frontpage.contact');
    }

    public function events()
    {
        return view('frontpage.events');
    }
}
