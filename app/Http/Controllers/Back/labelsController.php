<?php

namespace App\Http\Controllers\back;

use App\Models\Labels;
use App\Services\ConstantService;
use App\Services\LabelService;
use App\Tra\Poetry as Poetry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

class labelsController extends Controller
{
    use Poetry;

    public $view = [
        'view',   //页面  xxxx.xxx
        'index',  //默认页面 vvv.iindex
        'path',   //view 路径  xccc.cccc.ccc.cc
        'data',   //数据
    ];
    public $labelService;
    public $constantService;
    /*
     * 区别是否pjax还是url刷新
     */
    public function __construct(Request $request , LabelService $labelService ,ConstantService $constantService)
    {
        //注入labelservice
        $this->labelService = $labelService;
        $this->constantService = $constantService;

        //根据路由名称，获取view index path
        $this->view = $this->constantService->getViewAndPath($request,'back');

        //获取诗词
//        $this->view_data['getPoetry'] = $this->getPoetry();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->view['path'],$this->view);
    }

    /*
     * 或许可以把这个抽出来
     */
    public function getLabelsJson(Request $request){
        //layui的table 分页会传page和limit
        return $this->labelService->index($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //保存上传的标签  , 增加验证
        $this->labelService->store($request);
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

        return $this->labelService->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
