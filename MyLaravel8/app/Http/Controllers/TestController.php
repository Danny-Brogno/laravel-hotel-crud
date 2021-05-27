<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class TestController extends Controller {

  public function home() {

    return view("pages.home");

  }

  public function employees() {

    $employees = Employee::all();
    return view('pages.home', compact("employee"));
  }

}
