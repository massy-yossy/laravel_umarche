<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //
    public function show1(){
        return view('tests.test1');
    }
    public function show2(){
        return view('tests.test2');
    }
}
