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
        $hotPosts = $postService->getRightHotPosts(); //右侧视图热门文章 right.blade.php
        $randPosts = $postService->getRightRandPosts(); //右侧视图随机文章 right.blade.php
        View::share('hotPosts',$hotPosts);
        View::share('randPosts',$randPosts);
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
