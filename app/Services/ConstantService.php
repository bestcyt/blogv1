<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ConstantService {

    public $label;

    //待定
    public function getLabels(array $where,$ifArray = true){


    }

    /*
     * @todo 统一返回viewdata和viewpath
     */
    public function getViewAndPath(Request $request , $type){
        if (!in_array($type,['home','back'])){
            $type = 'home';
        }
        $routeName   = Route::currentRouteName();
        $re['view']  =$routeName;
        $re['index'] = $type.'.index';
        $re['path']  = $request->input('_pjax') ? $routeName : $type.'.jump';

        return $re;
    }

}