<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class label extends Model
{
    //
    protected $fillable = ['label_name' , 'desc'];

    /*
     * @todo 获取labels列表
     */
    public function getLabels(array $where){
        return self::where($where)->get();
    }

}
