<?php

namespace App\Services\home;


use App\Models\post;
use App\Models\Sort;
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

    public function __construct(post $post , SortService $sortService)
    {
        $this->sortService = $sortService;
        $this->postModel = $post;
    }

    /*
     * @todo 首页获取文章列表
     */
    public function getPosts($sortId = 0){
        $where = $this->sortService->checkSort($sortId) ? [['sort_id','=',$sortId]] : [];
        return $this->postModel->getIndexPosts($where);
    }

    /*
     * @todo pjax文章详情
     */
    public function show($id){
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