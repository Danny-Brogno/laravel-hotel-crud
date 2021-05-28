<?php

use Illuminate\Support\Facades\Route;

Route:: get('home', 'TestController@home') -> name("home");

Route::get('editEmployee/{id}', 'TestController@editEmployee') -> name("editEmployee");

Route::post('updateEmployee/{id}', 'TestController@updateEmployee') -> name("updateEmployee");

Route::get('deleteEmployee/{id}', 'TestController@deleteEmployee') -> name("deleteEmployee");
