<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view ('index');
    }
    public function about(){
        $name="Thuan";
        return view('about')->with('name',$name);
    }
}
