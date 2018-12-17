<?php

namespace App\Http\Controllers\back;

use App\Models\label;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class labelsController extends Controller
{
    public $view_path;
    public $view_data;
    public $view_init ;

    /*
     * 区别是否pjax还是url刷新
     */
    public function __construct(Request $request)
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
        $page = $request->input('page') ?? 1;
        $limit = $request->input('limit') ?? 10;
        $count = label::where('state',1)->count();
        $data = label::paginate($limit, ['*'], '', $page)->toArray();
        //toArray的数据带有总数啊余页数啊什么的，数据在data字段，回头业务层直接返回这个数据就好
        $data = $data['data'];
        return response()->json([
            'code' => 0,
            'msg' => ' ',
            'count' => $count,
            'data' => $data
        ]);
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
        label::create($request->except('_token'));
        flash(config('res.label-store-success'))->success();
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
        return label::where('id',$id)->update([$request->input('field')=>$request->input('value')]);
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
