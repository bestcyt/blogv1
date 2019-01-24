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
     *
     */
    public function getViewAndPath(Request $request , $type){
        $re = [];
        $routeName   = Route::currentRouteName();
        if ($type == 'home'){
            $re['view']  =$routeName;
            $re['index'] = $type.'.index';
            $re['path']  = $request->input('_pjax') ? $routeName : $type.'.jump';
        }
        if ($type == 'back'){
            $controller = explode('.',$routeName)[0];
            $re['view']  = 'back.content.'.$routeName;
            $re['index'] = 'back.content.'.$controller.'.index';
            $re['path']  = $request->input('_pjax') ? 'back.content.'.$routeName : 'back.content.jump';
        }
        return $re;
    }

}