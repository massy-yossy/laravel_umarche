<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //
    public function show1(){
        $test = 'テストメッセージ';
        return view('tests.test1', compact('test'));
    }
    public function show2(){
        return view('tests.test2');
    }
}
