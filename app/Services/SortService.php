<?php

namespace App\Services;

/*
 * @todo 文章业务层，虽然没啥东西。。
 */
use App\Models\label;
use App\Models\post;
use App\Models\Sort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SortService {

    public $SortModel;

    /*
     * @todo 构造方法注入模型对象
     */
    public function __construct( Sort $sort){
        $this->SortModel = $sort;
    }

    /*
     * @todo 文章首页分页数据哦
     */
    public function index(Request $request){
        //layui的table 分页会传page和limit
        $page = $request->input('page') ?? 1;
        $limit = $request->input('limit') ?? 10;
        $count = Cache::get('countPosts') ?? $this->PostModel->getPostsCount();
        $data_ = $this->PostModel->getPosts([],'created_at','desc',$page,$limit)->toArray();
        //toArray的数据带有总数啊余页数啊什么的，数据在data字段，回头业务层直接返回这个数据就好
        $data = $data_['data'];
        $returnJson = response()->json([
            'code' => 0,
            'msg' => ' ',
            'count' => $count,
            'data' => $data,
        ]);
        return $returnJson;
    }

    /*
     * @todo 文章创建
     */
    public function create(){
        $labels = Cache::get('labels');
        if(!$labels){
            $labels = $this->LabelModel->getLabels([['state','1'
            ]])->toArray();
        }
        return $labels;
    }

    /*
     * @todo 文章更新
     */
    public function update(Request $request,$id){
        return post::where('id',$id)->update([$request->input('field')=>$request->input('value')]);
    }

    /*
     * @todo 分类保存
     */
    public function store(Request $request){
        $create = $request->except('_token');
        $create['parent_id'] = 1;//暂时先都是顶底分类，因为有标签在
        $this->SortModel->createSort($create);
        flash(config('res.sort-store-success'))->success();
    }


    /*
     * @todo 获取列表json
     */
    public function getSortsJson(Request $request){
        //layui的table 分页会传page和limit
        $page = $request->input('page') ?? 1;
        $limit = $request->input('limit') ?? 10;
        $count = Cache::get('countLabels') ?? Sort::count();
        $data_ = Sort::paginate($limit, ['*'], '', $page)->toArray();
        //toArray的数据带有总数啊余页数啊什么的，数据在data字段，回头业务层直接返回这个数据就好
        $data = $data_['data'];
        return response()->json([
            'code' => 0,
            'msg' => ' ',
            'count' => $count,
            'data' => $data,
        ]);
    }

    /*
     * @todo 列表更新分类数据
     */
    public function updateSort(Request $request,$id){
        return $this->SortModel->updateSortById($id,[$request->input('field')=>$request->input('value')]);
    }

    /*
     * @todo 获取视图共享分类数据
     */
    public function getSorts(){
        return $this->SortModel->getSorts([
            ['state','=',1]
        ]);
    }
}