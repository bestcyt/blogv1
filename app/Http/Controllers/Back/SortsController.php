<?php

namespace App\Http\Controllers\back;

use App\Models\Sorts;
use App\Services\ConstantService;
use App\Services\PostService;
use App\Services\SortService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

class SortsController extends Controller
{
    public $view = [
        'view',   //页面  xxxx.xxx
        'index',  //默认页面 vvv.iindex
        'path',   //view 路径  xccc.cccc.ccc.cc
        'data',   //数据
    ];
    public $sortService;
    public $constantService;

    /*
     * 区别是否pjax还是url刷新
     */
    public function __construct(Request $request, SortService $sortService , ConstantService $constantService)
    {
        //根据路由名称，来分配视图和那啥数据
        //注入业务层 分层
        $this->sortService = $sortService;
        $this->constantService = $constantService;
        //根据路由名称，来分配视图和那啥数据
        $this->view = $this->constantService->getViewAndPath($request,'back');
    }

    /*
     * 获取列表json数据
     */
    public function getSortsJson(Request $request){
        return $this->sortService->getSortsJson($request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view($this->view['path'],$this->view);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->view['sorts'] = $this->sortService->getSorts();//搞成一棵树
        return view($this->view['path'],$this->view);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->sortService->store($request);
        return view($this->view['index'],$this->view);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->sortService->updateSort($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
