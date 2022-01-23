<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $nome = "";

    return view('views.home', compact('nome'));
});
