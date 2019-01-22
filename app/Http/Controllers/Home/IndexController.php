<?php

namespace App\Http\Controllers\Home;

use App\Services\HomeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /*
     * TODO trait，博客首页，pjax，好人卡
     *
     */
    public function __construct(HomeService $homeService){

    }

    //
    public function index(){


        return view('home.home');
    }
}
