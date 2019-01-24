<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        //创建视图共享，可以考虑分离一个出来，因为还挺多

    }

    /**
     * Register any application services.
     *
     * 服务容器和实现类的绑定，比如订单通知的实现方式，多个方式集成接口，然后绑定其中一个方式，换的话就注释就行了
     * @return void
     */
    public function register()
    {
        //
        //例子 ， 订单通知绑定实现类
        $this->app->bind(BillingNotifierInterface::class, function ($app) {
            return new EmailBillingNotifier();
        });

//        有时候，你可能想在整个应用生命周期中只实例化某类一次，类似单例模式，可以通过 singleton 方法来注册接口与实现类：

//        $this->app->singleton(BillingNotifierInterface::class, function ($app) {
//            return new SmsBillingNotifier();
//        });

        //例子 ， 接口绑定一个实现类，，这个bill实现类注入通知接口的实现方式
        $this->app->bind(BillerInterface::class, function ($app) {
            return new StripeBiller($app->make(BillingNotifierInterface::class));
        });
    }
}
