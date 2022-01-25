<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $menu = ['character', 'comics', 'movie'];

    public function test()
    {
        $data = ['menu' => $this -> menu];
        return view('views.home', $data);
        // return view('views.home', compact('menu')); secondo modo
    }

    public function detail() 
    {
        $menu = $this ->menu;
        return view('views.detail', compact('menu'));
    }
}
