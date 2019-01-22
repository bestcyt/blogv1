<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $table = 'posts';



    protected $connection = 'mysql';

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
    public function getIndexPosts(){

        return self::where([
            ['state','=',1]
        ])->get();
    }
}
