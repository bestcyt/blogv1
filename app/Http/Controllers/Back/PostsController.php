<?php

namespace App\Http\Controllers\back;

use App\Models\label;
use App\Models\post;
use App\Services\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

class PostsController extends Controller
{
    public $view_path;
    public $view_data;
    public $view_index;

    public $PostService;

    /*
     * 区别是否pjax还是url刷新
     */
    public function __construct(Request $request,PostService $postService)
    {
        //注入业务层 分层
        $this->PostService = $postService;
        //根据路由名称，来分配视图和那啥数据
        $name = Route::currentRouteName();
        if ($request->input('_pjax')){
            $this->view_path = 'back.content.'.$name;
        }else{
            $this->view_path = 'back.content.jump';
        }
        $this->view_data = ['view'=>$name];
        $this->view_index = 'back.content.posts.index';
    }

    /**
     * @todo 文章列表
     */
    public function index()
    {
        return view($this->view_path,$this->view_data);
    }

    /**
     * @todo 文件创建
     */
    public function create()
    {
        //获取标签，缓存或数据库
        $this->view_data['labels'] = $this->PostService->create();
        return view($this->view_path,$this->view_data);
    }

    /**
     * @todo 文章保存
     */
    public function store(Request $request)
    {
        $this->PostService->store($request);
        return view($this->view_index,$this->view_data);
    }

    /*
     * 统一获取数据
    * 或许可以把这个抽出来
    */
    public function getPostsJson(Request $request){
        return $this->PostService->index($request);
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
        return $this->PostService->update($request,$id);
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
