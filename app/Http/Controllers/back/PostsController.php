<?php

namespace App\Http\Controllers\back;

use App\Models\label;
use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

class PostsController extends Controller
{
    public $view_path;
    public $view_data;
    public $view_init;

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

        $this->view_init = 'back.content.posts.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view($this->view_path,$this->view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $labels = Cache::get('labels');
        if(!$labels){
            $labels = label::where('state','1')->get()->toArray();
        }
        $this->view_data['labels'] = $labels;
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
        //@todo 业务层分离，待
        $data['label_ids'] = implode(',',array_keys($request->input('labels')));
        $data['sort_id'] = 1;
        $data['post_name'] = $request->input('post_name');
        $data['post_desc'] = $request->input('post_desc');
        $data['info'] = $request->input('info');
        $data['state'] = $request->input('state') ? 1 : 0;

        post::insert($data);

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
        //
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
