<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class TestController extends Controller {

  public function home() {

    $employees = Employee::all();
    return view("pages.home", compact("employees"));

  }

  public function editEmployee($id) {

    $singleEmployee = Employee::find($id);
    // dd($singleEmployee);
    return view("pages.edit-employee", compact("singleEmployee"));

  }

  public function updateEmployee(Request $request, $id) {

    $singleEmployee = Employee::find($id);

    $validate = $request -> validate([
      'firstname' => 'nullable|max:100',
      'lastname' => 'nullable|max:100',
      'role' => 'nullable|max:20',
      'ral' => 'nullable|max:20'
    ]);


    // THIS UPDATES THE "OLD" DATA USING THE REQUESTED PARAMS (THE ONES PUT FROM USER)
    $singleEmployee -> update($validate);

    return redirect() -> route('home');

  }

  public function deleteEmployee($id) {

    $singleEmployee = Employee::find($id);
    $singleEmployee -> delete($singleEmployee);

    return redirect() -> route('home');
  }
}
