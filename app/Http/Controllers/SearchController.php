<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
 
  public function search(Request $req){
    $employee = DB::table('users')->where('name', 'like', '%' . $req->key . '%')
                                      ->orwhere('address', 'like', '%' . $req->key . '%')->where('isEmployee', 1)
                                      ->get();
    //dd($employee);
                                      return view('search', compact('employee'));
  }
}
