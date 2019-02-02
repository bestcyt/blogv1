<?php

namespace App\Providers;

use App\Services\LabelService;
use App\Services\PostService;
use App\Services\SortService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(PostService $postService , SortService $sortService , LabelService $labelService)
    {
        //共享数据，比如页面左侧人信息，分类信息，右侧文章信息，标签等
        $hotPosts = $postService->getRightHotPosts(); //右侧视图热门文章 right.blade.php
        $randPosts = $postService->getRightRandPosts(); //右侧视图随机文章 right.blade.php

//        dd($hotPosts);
        //分类数据
        $sorts = $sortService->getSorts();

        //标签云
        $labels = $labelService->getLabels();

        View::share('hotPosts',$hotPosts);
        View::share('randPosts',$randPosts);

        View::share('sorts',$sorts);

        View::share('labels',$labels);
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
