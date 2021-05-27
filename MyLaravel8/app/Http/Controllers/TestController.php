<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Ospite;

class TestController extends Controller {

  public function home() {

    return view("pages.home");
    
  }

}
