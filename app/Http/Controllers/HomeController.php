<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function test()
    {
        return view('views.home');
    }

    public function detail() 
    {
        return view('views.detail');
    }
}
