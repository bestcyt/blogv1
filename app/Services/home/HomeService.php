<?php

namespace App\Services\home;


use App\Models\post;
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

    public function __construct(post $post)
    {
        $this->postModel = $post;
    }

    /*
     * @todo 首页获取文章列表
     */
    public function index(Request $request){
        return $this->postModel->getIndexPosts();
    }

    /*
     * @todo pjax文章详情
     */
    public function show(Request $request){
        return $this->postModel->getPostById($request->input('id'));
    }

}