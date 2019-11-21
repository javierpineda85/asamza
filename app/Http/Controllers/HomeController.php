<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
      return view('home');
    }

    public function working(){
      return view('working');
    }

    public function index(){
      return view('inicio');
    }
    /*public function __construct(){
        $this->middleware('auth');
    }
    public function index(Request $request){
        $request->user()->authorizeRoles(['user', 'admin','guest','superAdmin']);
        return view('inicio');
    }*/

}
