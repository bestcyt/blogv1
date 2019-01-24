<?php

namespace App\Providers;

use App\Services\PostService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(PostService $postService)
    {
        //共享数据，比如页面左侧人信息，分类信息，右侧文章信息，标签等
        $posts = $postService->getRightHotPosts(); //后面根据浏览量跳转，不然就随机
        View::share('hotPosts',$posts);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
