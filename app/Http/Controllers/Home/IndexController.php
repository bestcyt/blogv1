<?php

namespace App\Http\Controllers\Home;

use App\Services\home\HomeService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    /*
     * TODO trait，博客首页，pjax，好人卡
     *
     */

    public $view_path;
    public $view_data;
    public $view_index;
    public $homeService;
    /*
     * 区别是否pjax还是url刷新
    */
    public function __construct(HomeService $homeService,Request $request){
        $this->homeService = $homeService;
        $this->view_path = Route::currentRouteName();
        $this->view_data['isPjax'] = !empty($request->input('_pjax')) ?? false;
        $this->view_index = 'home.index';
    }

    //首页
    public function index(Request $request){
        //还需要获取用户信息，标签云，热门文章，文字等等
        $this->view_data['posts'] = $this->homeService->index($request);
        return view($this->view_path,$this->view_data);
    }

    /*
     * @todo 返回文章详情
     */
    public function show(Request $request){

        //还要对传的id进行验证，是否数字等等

        $this->view_data['post'] = $this->homeService->show($request);

        return view($this->view_path,$this->view_data);

    }
}
