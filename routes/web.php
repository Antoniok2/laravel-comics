<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@test');

Route::get('detail', 'HomeController@detail');
