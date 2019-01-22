<?php

namespace App\Http\Controllers\Home;

use App\Services\home\HomeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /*
     * TODO trait，博客首页，pjax，好人卡
     *
     */
    public $homeService;

    public function __construct(HomeService $homeService){
        $this->homeService = $homeService;
    }

    //
    public function index(Request $request){

        $posts = $this->homeService->index($request);
        return view('home.content-list',['posts'=>$posts]);
    }
}
