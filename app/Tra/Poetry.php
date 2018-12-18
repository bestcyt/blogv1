<?php

namespace App\Tra;

trait Poetry{

    public function getPoetry(){
        try{
            $poetry = file_get_contents('https://v2.jinrishici.com/one.json');
            $poetry = json_decode($poetry,true)['data']['content'];
        }catch (\Exception $e){
            $poetry = '接口崩了，好好学习，天天向上'.rand(1,100);
        }

        return $poetry;
    }
}