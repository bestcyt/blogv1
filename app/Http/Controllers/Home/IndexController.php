<?php

namespace App\Http\Controllers\Home;

use App\Services\ConstantService;
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
    public $view = [
        'view',   //页面
        'index',  //默认页面
        'path',   //view 路径
        'data',   //数据
    ];
    public $homeService;
    public $constantService;
    /*
     * 区别是否pjax还是url刷新
    */
    public function __construct(HomeService $homeService ,ConstantService $constantService ,Request $request){
        //注入业务层
        $this->homeService = $homeService;
        $this->constantService = $constantService;

        //处理跳转地址
        $this->view = $this->constantService->getViewAndPath($request,'home');
    }

    //首页
    public function index(Request $request){
        //还需要获取用户信息，标签云，热门文章，文字等等

        $this->view['posts'] = $this->homeService->index($request);
        return view($this->view['path'],$this->view);
    }

    /*
     * @todo 返回文章详情
     */
    public function show(Request $request){
        //还要对传的id进行验证，是否数字等等
        $this->view['post'] = $this->homeService->show($request);
        return view($this->view['path'],$this->view);
    }
}
