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
        // @todo 业务层分离，待
        //没有标签文章关系表，就直接处理标签，方便检索，添加缓存
        $as = array_keys($request->input('labels'));
        foreach ($as as &$a){
            $a = '['.$a.']';
        }
        $data['label_ids'] = implode(',',$as);
        $data['sort_id'] = 1;
        $data['post_name'] = $request->input('post_name');
        $data['post_desc'] = $request->input('post_desc');
        $data['info'] = $request->input('info');
        $data['state'] = $request->input('state') ? 1 : 0;
        $data['created_at'] = date('Y-m-d H:m:s',time());
        $data['updated_at'] = date('Y-m-d H:m:s',time());

        post::insert($data);
        Cache::put('countPosts',post::count());
        flash(config('res.post-store-success'))->success();

        return view($this->view_init,$this->view_data);
    }

    /*
     * 统一获取数据
    * 或许可以把这个抽出来
    */
    public function getPostsJson(Request $request){
        //layui的table 分页会传page和limit
        $page = $request->input('page') ?? 1;
        $limit = $request->input('limit') ?? 10;
        $count = Cache::get('countPosts') ?? post::count();
        $data_ = post::orderBy('created_at','desc')->paginate($limit, ['*'], '', $page)->toArray();
        //toArray的数据带有总数啊余页数啊什么的，数据在data字段，回头业务层直接返回这个数据就好
        $data = $data_['data'];
        return response()->json([
            'code' => 0,
            'msg' => ' ',
            'count' => $count,
            'data' => $data,
        ]);
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
        
        return post::where('id',$id)->update([$request->input('field')=>$request->input('value')]);
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
