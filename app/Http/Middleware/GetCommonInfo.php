<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class GetCommonInfo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //用中间件搞一个诗词放到缓存，一分钟一次
        try{
            $poetry = file_get_contents('https://v2.jinrishici.com/one.json');
            Cache::put('poetry', json_decode($poetry,true)['data']['content'], 1);
        }catch (\Exception $e){
            Cache::put('poetry', '接口崩了，好好学习，天天向上'.rand(1,100), 1);
        }

        return $next($request);
    }
}
