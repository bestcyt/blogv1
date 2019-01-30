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

class PostService {

    public $PostModel;
    public $LabelModel;
    public $SortModel;

    /*
     * @todo 构造方法注入模型对象
     */
    public function __construct( post $post , label $label ,Sort $sort){
        $this->PostModel = $post;
        $this->LabelModel = $label;
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
     * @todo 文章创建获取标签
     */
    public function createGetLabels(){
        $labels = Cache::get('labels');
        if(!$labels){
            $labels = $this->LabelModel->getLabels([['state','1'
            ]])->toArray();
            Cache::put('labels',$labels);
        }

        return $labels;
    }

    /*
     * @todo 文章创建获取分类
     */
    public function createGetSorts(){
        $sorts = Cache::get('sorts');
        if(!$sorts) {
            $sorts = $this->SortModel->getSorts([
                ['state', '=', 1]
            ])->toArray();
            Cache::put('sorts', $sorts);
        }
        return $sorts;
    }


    /*
     * @todo 文章更新
     */
    public function update(Request $request,$id){
        return post::where('id',$id)->update([$request->input('field')=>$request->input('value')]);
    }

    /*
     * @todo 文章保存
     */
    public function store(Request $request){
        //没有标签文章关系表，就直接处理标签，方便检索，添加缓存
        $as = array_keys($request->input('labels'));
        foreach ($as as &$a){
            $a = '['.$a.']';
        }
        $data['label_ids'] = implode(',',$as);
        $data['sort_id'] = $request->input('sorts');
        $data['user_id'] = Auth::id();
        $data['post_name'] = $request->input('post_name');
        $data['post_desc'] = $request->input('post_desc');
        $data['info'] = $request->input('info');
        $data['state'] = $request->input('state') ? 1 : 0;
        $data['is_top'] = $request->input('is_top') ? 1 : 0;
        $data['is_comment'] = $request->input('is_comment') ? 1 : 0;
        $data['created_at'] = date('Y-m-d H:m:s',time());
        $data['updated_at'] = date('Y-m-d H:m:s',time());

        post::insert($data);
        Cache::put('countPosts',post::count());
        flash(config('res.post-store-success'))->success();
    }

    /*
     * @todo 右侧热门文章
     */
    public function getRightHotPosts(){
        return DB::table('posts')
            ->where([
                ['state','=',1]
            ])
            ->orderBy('id','desc')
            ->limit(4)
            ->get();
    }

    /*
     * @todo 右侧随机文章
     */
    public function getRightRandPosts(){
        return DB::table('posts')
            ->whereRaw('id >= (SELECT FLOOR( MAX(id) * RAND()) FROM `posts` )')
            ->orderBy('id')
            ->limit(4)
            ->get();
    }

}