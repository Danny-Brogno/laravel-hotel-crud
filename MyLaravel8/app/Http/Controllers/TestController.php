<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Employees;

class TestController extends Controller {

  public function home() {

    return view("pages.home");

  }

}
