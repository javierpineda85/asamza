<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index(Request $req){

    $req->user()->authorizeRoles(['admin','superAdmin']);

    return view('/admin/admin');

  }
  /*public function index(){
    return view('admin/admin');
  }*/
}
