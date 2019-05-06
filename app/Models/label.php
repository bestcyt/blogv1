<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class label extends Model
{
    //
    protected $table = 'labels';
    protected $fillable = ['label_name' , 'desc'];

    /*
     * @todo 获取labels列表
     */
    public function getLabels(array $where){
        return self::where($where)->get();
    }

    /*
     * @todo
     */
    public function getLabelsPaginate(array $where,$order,$by, $page,$limit)
    {
        return self::orderBy('created_at', 'desc')->paginate($limit, ['*'], '', $page);
    }

    /*
     * @todo 返回条数
     */
    public function getLabelsCount(){
        return self::count();
    }

    /*
     * @todo 创建
     * 是request
     */
    public function createLabel($create){
        return self::create($create);
    }

    /*
     * @todo update
     */
    public function updateLabel(array $update,$id){
        return self::where('id',$id)->update($update);
    }

    /*
     * @todo 检索查询分类数据
     */
    public function getLabelByWhere($where){
        return self::where($where)->first();
    }
}
