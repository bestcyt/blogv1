<?php

namespace App\Http\Controllers\back;

use App\Models\label;
use App\Services\LabelService;
use App\Tra\Poetry as Poetry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

class labelsController extends Controller
{
    use Poetry;

    public $view_path;
    public $view_data;
    public $view_init ;

    public $labelService ;

    /*
     * 区别是否pjax还是url刷新
     */
    public function __construct(Request $request , LabelService $labelService)
    {
        //根据路由名称，来分配视图和那啥数据
        $name = Route::currentRouteName();
        if ($request->input('_pjax')){
            $this->view_path = 'back.content.'.$name;
        }else{
            $this->view_path = 'back.content.jump';
        }
        $this->view_data = ['view'=>$name];

        $this->view_init = 'back.content.labels.index';

        //获取诗词
        $this->view_data['getPoetry'] = $this->getPoetry();

        //注入labelservice
        $this->labelService = $labelService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view($this->view_path,$this->view_data);
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
        //
        return view($this->view_path,$this->view_data);
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
        return view($this->view_init,$this->view_data);
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
