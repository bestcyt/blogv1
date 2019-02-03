<?php

namespace App\Services\home;


use App\Models\post;
use App\Models\Sort;
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

    public function __construct(post $post , SortService $sortService , LabelService $labelService)
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
                    $where = $this->labelService->checkLabel($sortOrLabelId) ? [['label_ids','like',"[$sortOrLabelId]"]] : [];
                    break;
                case 'sort':
                    $where = $this->sortService->checkSort($sortOrLabelId) ? [['sort_id','=',$sortOrLabelId]] : [];
                    break;
                default :
                    $where = [];
                    break;
            }
        }
        $where[] = ['state','=',1];
        $where[] = ['is_top','=',0];
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
                ['state','=',1],
                ['is_top','=',1]
            ]
        );
    }

}