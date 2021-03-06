<?php

namespace App\Services;

use App\Models\Labels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class LabelService {

    public $LabelModel;

    public function __construct(Labels $label){
        $this->LabelModel = $label;
    }

    public function index(Request $request){

        $page = $request->input('page') ?? 1;
        $limit = $request->input('limit') ?? 10;

        $data_ = $this->LabelModel->getLabelsPaginate([],'created_at','desc',$page,$limit)->toArray();
        //toArray的数据带有总数啊余页数啊什么的，数据在data字段，回头业务层直接返回这个数据就好
        $data = $data_['data'];
        $count = Cache::get('countLabels') ?? $this->LabelModel->getLabelsCount();
        return response()->json([
            'code' => 0,
            'msg' => ' ',
            'count' => $count,
            'data' => $data,
        ]);
    }

    public function store(Request $request){
        $create = $request->except('_token');
        $this->LabelModel->createLabel($create);
        Cache::put('countLabels',$this->LabelModel->getLabelsCount());
        flash(config('res.label-store-success'))->success();
    }

    public function update(Request $request,$id){
        $update = [$request->input('field')=>$request->input('value')];
        return $this->LabelModel->updateLabel($update,$id);
    }

    /*
     * @todo 获取标签云视图数据
     */
    public function getLabels(){
        return $this->LabelModel->getLabels([['status','=',1]]);
    }

    /*
     * @todo 检测标签是否存在，并返回检索格式
     */
    public function checkLabel($labelId){
        //验证labeldId是正常数字
        if (!is_numeric($labelId)){
            return false;
        }
        return $this->LabelModel->getLabelByWhere([
            ['state','=',1],
            ['id','=',$labelId],
        ]);

    }


}