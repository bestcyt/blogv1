<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Sort extends Model
{
    protected $table = 'sorts';

    protected $fillable = ['sort_name', 'parent_id','desc'];
    //
    public function childCategory() {
        return $this->hasMany('App\Models\Sort', 'parent_id', 'id');
    }

    public function allChildrenCategorys()
    {
        return $this->childCategory()->with('allChildrenCategorys');
    }

    /*
     * @todo 创建分类
     * $create - > array
     */
    public function createSort($create){
        return self::create($create);
    }

    /*
     * @todo 根据id更新数据
     */
    public function updateSortById($id,$update){
        return self::where('id',$id)->update($update);
    }

    /*
     * @todo 获取全部分类数据
     */
    public function getSorts($where){
        return self::where($where)->get();
    }
}
