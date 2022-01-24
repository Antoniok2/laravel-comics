<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('views.home');
});

Route::get('detail', function() {
    return view('views.detail');
});
