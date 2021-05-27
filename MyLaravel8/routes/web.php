<?php

use Illuminate\Support\Facades\Route;

Route:: get('home', 'TestController@home') -> name("home");

Route::get('employees', 'TestController@employees') -> name("employees");
