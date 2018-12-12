<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    //
    public function index(){

//        dd($_SERVER);
//        if(){
//
//        }
        return view('back.base');
    }

    //是否pjax判断
    public function test(Request $request){

        if ($request->input('_pjax')){

            return view('back.content.test');
        }else{

            return view('back.content-base.test');
        }


    }
    public function test2(Request $request){

        if ($request->input('_pjax')){

            return view('back.content.test2');
        }else{

            return view('back.content-base.test2');
        }


    }
}
