<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sorts extends Model
{
    protected $table = 'sorts';

    protected $fillable = ['name', 'parent_id','desc'];
    //
    public function childCategory() {
        return $this->hasMany('App\Models\Sort', 'parentId', 'id');
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

        $create['created_at'] = $create['updated_at'] =  Carbon::now()->toDateTimeString();
        $sortId = DB::table('sorts')
            ->insertGetId($create);
        $sort = DB::table('sorts')->find($sortId);
        DB::table('sorts')->where('id',$sort->id)->update(['parentIds'=>$sort->parentIds.$sortId.'-']);
        return true;
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

    /*
     * @todo 检索查询分类数据
     */
    public function getSortByWhere($where){
        return self::where($where)->first();
    }
}
