<?php

namespace App\Services\home;


use App\Models\Posts;
use App\Models\Sorts;
use App\Services\LabelService;
use App\Services\SortService;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/22
 * Time: 11:21
 */
class HomeService
{
    public $postModel;
    public $sortService;
    public $labelService;

    public function __construct(Posts $post , SortService $sortService , LabelService $labelService)
    {
        $this->sortService = $sortService;
        $this->labelService = $labelService;
        $this->postModel = $post;
    }

    /*
     * @todo 首页获取文章列表
     */
    public function getPosts($sortOrLabelId){
        $where = [];
        // label/70
        if (request()->path() != '/'){
            switch (explode('/',request()->path())[0]){
                case 'label':
                    $where = $this->labelService->checkLabel($sortOrLabelId) ? [['labelIds','like',"[$sortOrLabelId]"]] : [];
                    break;
                case 'sort':
                    $where = $this->sortService->checkSort($sortOrLabelId) ? [['sortId','=',$sortOrLabelId]] : [];
                    break;
                default :
                    $where = [];
                    break;
            }
        }
        $where[] = ['status','=',1];
        $where[] = ['isTop','=',2];
        return $this->postModel->getIndexPosts($where);
    }

    /*
     * @todo pjax文章详情
     */
    public function show($id){
        //增加阅读量

        return $this->postModel->getPostById($id);
    }

    /*
     * @todo 获取置顶文章
     */
    public function getTopPosts(){
        return $this->postModel->getTopPosts(
            [
                ['status','=',1],
                ['isTop','=',1]
            ]
        );
    }

    /*
     * @todo 点赞
     */
    public function postLike(Request $request){
        return $this->postModel->where('id',$request->input('id'))->increment('likeCount');
    }

}