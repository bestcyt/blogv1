<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', 'back\PageController@index');
//Route::get('/test','back\PageController@test');
//Route::get('/test2','back\PageController@test2');

/*
 * @todo 后台啦啦啦
 */
Route::prefix('back')->group(function (){
    //后台注册登录路由
    Auth::routes();
    //后台首页
//    Route::geback/labels
    //后台统一back命名空间
    Route::get('table','TestsController@index');
    Route::namespace('Back')->middleware(['getCommonInfo','auth'])->group(function (){
//        Route::get('/index', 'PageController@index'); //
//        Route::get('/{index?}', 'PageController@index');

        //文章资源路由
        Route::resource('posts', 'PostsController', ['names' => [
            'index'   => 'posts.index',
            'create'  => 'posts.create',
            'store'   => 'posts.store',
            'show'    => 'posts.show',
            'edit'    => 'posts.edit',
            'update'  => 'posts.update',
            'destroy' => 'posts.destroy'
        ]]);
        //分类管理资源路由
        Route::resource('sorts', 'SortsController', ['names' => [
            'index'   => 'sorts.index',
            'create'  => 'sorts.create',
            'store'   => 'sorts.store',
            'show'    => 'sorts.show',
            'edit'    => 'sorts.edit',
            'update'  => 'sorts.update',
            'destroy' => 'sorts.destroy'
        ]]);
        //标签管理资源路由
        Route::resource('labels', 'labelsController', ['names' => [
            'index'   => 'labels.index',
            'create'  => 'labels.create',
            'store'   => 'labels.store',
            'show'    => 'labels.show',
            'edit'    => 'labels.edit',
            'update'  => 'labels.update',
            'destroy' => 'labels.destroy'
        ]]);
        //分类管理资源路由
        Route::resource('sorts', 'SortsController', ['names' => [
            'index'   => 'sorts.index',
            'create'  => 'sorts.create',
            'store'   => 'sorts.store',
            'show'    => 'sorts.show',
            'edit'    => 'sorts.edit',
            'update'  => 'sorts.update',
            'destroy' => 'sorts.destroy'
        ]]);

        //laytable获取json数据
        Route::get('getLabelsJson','labelsController@getLabelsJson');
        Route::get('getSortsJson','SortsController@getSortsJson');
        Route::get('getPostsJson','PostsController@getPostsJson');

        //必须放下面，不然会导致路由紊乱，pjax失效
        Route::get('/{index?}', 'PageController@index');
    });
});

/*
 * @todo 前台啦啦啦
 * 不用登录，对接第三方登录laravel Socialite 并实现基于 Github，qq 的登录认证，登录后评论吧
 */
Route::namespace('Home')->group(function (){
    //文章列表与详情
    Route::get('/{posts?}','IndexController@posts')->name('home.posts');
    Route::get('/post/{id}','IndexController@show')->name('home.show');

    //分类的文章列表
    Route::get('/sort/{id}','IndexController@posts');
});



Route::get('/team-trip/header',function (){
    return view('header');
})->name('pdf.header');
Route::get('/team-trip/footer',function (){
    return view('footer');
})->name('pdf.footer');

