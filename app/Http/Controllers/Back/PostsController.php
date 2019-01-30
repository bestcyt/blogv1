<?php

namespace App\Http\Controllers\back;

use App\Models\label;
use App\Models\post;
use App\Services\ConstantService;
use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

class PostsController extends Controller
{
    public $view = [
        'view',   //页面  xxxx.xxx
        'index',  //默认页面 vvv.iindex
        'path',   //view 路径  xccc.cccc.ccc.cc
        'data',   //数据
    ];
    public $postService;
    public $constantService;


    /*
     * 区别是否pjax还是url刷新
     */
    public function __construct(Request $request,PostService $postService ,ConstantService $constantService)
    {
        //注入业务层 分层
        $this->postService = $postService;
        $this->constantService = $constantService;
        //根据路由名称，来分配视图和那啥数据
        $this->view = $this->constantService->getViewAndPath($request,'back');
    }

    /**
     * @todo 文章列表
     */
    public function index()
    {
        return view($this->view['path'],$this->view);
    }

    /**
     * @todo 文章创建
     */
    public function create()
    {
        //获取标签，缓存或数据库
        $this->view['labels'] = $this->postService->createGetLabels();
        $this->view['sorts'] = $this->postService->createGetSorts();
        return view($this->view['path'],$this->view);
    }

    /**
     * @todo 文章保存
     */
    public function store(Request $request)
    {
        $this->postService->store($request);
        return view($this->view['index'],$this->view);
    }

    /*
     * 统一获取数据
    * 或许可以把这个抽出来
    */
    public function getPostsJson(Request $request){
        return $this->postService->index($request);
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
        return $this->postService->update($request,$id);
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
