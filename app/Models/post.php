<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'posts';
    protected $connection = 'mysql';

    public function user(){
        return $this->belongsTo('App\User')->withDefault();
    }

    /*
     *  1.where条件 [ ['aa','=','1'] ] 或 [1]
     *  2.orderBy条件 ['created','desc']
     *  3.page 条件 [第几页，页数]
     */
    public function getPosts(array $where,$order,$by, $page,$limit){

        return post::orderBy('created_at','desc')->paginate($limit, ['*'], '', $page);

//        @todo 待改进条件等等
//        if (count($where) != 0){
//            return self::where($where)->orderBy($order,$by)->paginate($page, ['*'], '', $limit);
//        }
//        return self::orderBy($order,$by)->paginate($page, ['*'], '', $limit);
    }

    /*
     * 获取文章数量
     */
    public function getPostsCount(){
        return self::count();
    }

    /*
     * @todo 获取首页文章
     */
    public function getIndexPosts($where = []){
        return self::with('user')->where($where)->orderBy('updated_at','desc')->paginate(2);
    }

    /*
     * @todo 获取置顶文章，后面可以优化成传条件跟上面合并成一个方法
     */
    public function getTopPosts($where = []){

        return self::with('user')->where($where)->orderBy('updated_at','desc')->get();
    }

    /*
     * 获取文章详情
     */
    public function getPostById($id){
        return self::find($id);
    }
}
